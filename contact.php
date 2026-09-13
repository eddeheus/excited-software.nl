<?php
declare(strict_types=1);

/**
 * Verwerkt het contactformulier van excited-software.nl.
 * Vereist PHP 8.1+ en een werkende mail()-configuratie op de server.
 * Wil je liever via SMTP versturen, vervang dan het mail()-blok onderaan door PHPMailer of Symfony Mailer.
 */

const ONTVANGER  = 'e.deheus@excited-software.nl';
const AFZENDER   = 'website@excited-software.nl'; // moet een adres op je eigen domein zijn i.v.m. SPF/DMARC
const ONDERWERP  = 'Bericht via excited-software.nl';

// TURNSTILE_SECRET_KEY staat in config/secrets.php: buiten git, handmatig op de
// server gezet (zie config/secrets.example.php). Staat dat bestand er nog niet,
// dan wordt de captcha-check overgeslagen i.p.v. het formulier te breken.
$secretsFile = __DIR__ . '/config/secrets.php';
if (is_file($secretsFile)) {
    require $secretsFile;
}

header('Content-Type: application/json; charset=utf-8');

function antwoord(bool $ok, ?string $error = null, int $status = 200): never
{
    http_response_code($status);
    echo json_encode(['ok' => $ok, 'error' => $error], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    antwoord(false, 'Ongeldige aanvraag.', 405);
}

// Honeypot: echte bezoekers zien dit veld niet, bots vullen het vaak wel in.
if (!empty($_POST['website'])) {
    antwoord(true); // doe alsof het gelukt is, zodat de bot niets leert
}

// Cloudflare Turnstile verifiëren (alleen als config/secrets.php geconfigureerd is).
if (defined('TURNSTILE_SECRET_KEY')) {
    $token = (string)($_POST['cf-turnstile-response'] ?? '');
    if ($token === '') {
        antwoord(false, 'Captcha-verificatie ontbreekt. Herlaad de pagina en probeer het opnieuw.', 422);
    }

    $verificatie = @file_get_contents('https://challenges.cloudflare.com/turnstile/v0/siteverify', false, stream_context_create([
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query([
                'secret'   => TURNSTILE_SECRET_KEY,
                'response' => $token,
                'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
            ]),
            'timeout' => 5,
        ],
    ]));

    // Bij een storing bij Cloudflare zelf (bv. timeout) laten we het bericht door:
    // fail-open, zodat een tijdelijke API-hik geen echte aanvraag blokkeert.
    if ($verificatie !== false) {
        $resultaat = json_decode($verificatie, true);
        if (!($resultaat['success'] ?? false)) {
            antwoord(false, 'Captcha-verificatie mislukt. Herlaad de pagina en probeer het opnieuw.', 422);
        }
    }
}

$schoon = static fn(string $key, int $max): string =>
    mb_substr(trim(str_replace(["\r", "\n"], ' ', (string)($_POST[$key] ?? ''))), 0, $max);

$naam    = $schoon('naam', 100);
$email   = $schoon('email', 200);
$bedrijf = $schoon('bedrijf', 100);
$bericht = mb_substr(trim((string)($_POST['bericht'] ?? '')), 0, 5000);

if ($naam === '' || $bericht === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    antwoord(false, 'Vul je naam, een geldig e-mailadres en een bericht in.', 422);
}

// Simpele rem: maximaal 1 bericht per 30 seconden per IP.
$lock = sys_get_temp_dir() . '/contact_' . md5($_SERVER['REMOTE_ADDR'] ?? 'x');
if (is_file($lock) && filemtime($lock) > time() - 30) {
    antwoord(false, 'Even geduld, je hebt net al een bericht verstuurd.', 429);
}
touch($lock);

$body = implode("\n", [
    "Naam:    $naam",
    "E-mail:  $email",
    "Bedrijf: " . ($bedrijf !== '' ? $bedrijf : '-'),
    "IP:      " . ($_SERVER['REMOTE_ADDR'] ?? '-'),
    "",
    $bericht,
]);

$headers = [
    'From: EXCITED software website <' . AFZENDER . '>',
    'Reply-To: ' . $naam . ' <' . $email . '>',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . PHP_VERSION,
];

$verzonden = mail(ONTVANGER, ONDERWERP, $body, implode("\r\n", $headers));

antwoord($verzonden, $verzonden ? null : 'Versturen is niet gelukt. Probeer het later nog eens.', $verzonden ? 200 : 500);
