<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacyverklaring | EXCITED software</title>
  <meta name="description" content="Hoe EXCITED software omgaat met persoonsgegevens via het contactformulier, Google Analytics en Cloudflare Turnstile.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://excited-software.nl/privacyverklaring.php">
  <link rel="icon" href="assets/img/favicon.ico" sizes="any">
  <link rel="icon" type="image/png" href="assets/img/excited-logo-500px.png" sizes="500x500">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .legal { padding: 64px 0 96px; max-width: 720px; }
    .legal h1 { font-size: clamp(32px, 5vw, 48px); letter-spacing: -.03em; margin: 0 0 8px; }
    .legal .updated { color: var(--ink-2); margin: 0 0 40px; }
    .legal h2 { font-size: 21px; letter-spacing: -.01em; margin: 36px 0 10px; }
    .legal p { color: var(--ink-2); margin: 0 0 14px; }
    .legal ul { color: var(--ink-2); margin: 0 0 14px; padding-left: 20px; }
    .legal a { color: var(--red); }
  </style>
</head>
<body>

  <header>
    <div class="wrap nav">
      <a class="brand" href="index.php" aria-label="EXCITED software, naar de homepage">
        <img src="assets/img/excited-logo-500px.png" alt="" width="38" height="38">
        <span><b>EXCITED</b> <small>software</small></span>
      </a>
      <nav aria-label="Hoofdmenu">
        <ul>
          <li><a href="index.php#diensten">Diensten</a></li>
          <li><a href="index.php#werkwijze">Werkwijze</a></li>
          <li><a class="cta" href="index.php#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="legal wrap">
      <h1>Privacyverklaring</h1>
      <p class="updated">Laatst bijgewerkt: 13 september 2026</p>

      <p>EXCITED software (Ed de Heus), Kamgrasstraat 30, 2288 HE Rijswijk, KvK 27144483, is verantwoordelijk voor de verwerking van persoonsgegevens zoals hieronder beschreven. Vragen hierover? Stuur een bericht via het <a href="index.php#contact">contactformulier</a>.</p>

      <h2>Contactformulier</h2>
      <p>Vul je het contactformulier in, dan verwerk ik de gegevens die je zelf invult (naam, e-mailadres, eventueel je bedrijfsnaam en je bericht) en je IP-adres. Dat IP-adres gebruik ik uitsluitend om spam en misbruik tegen te gaan (een simpele rem van maximaal één bericht per 30 seconden per IP-adres) en niet voor iets anders. Je gegevens gebruik ik alleen om te reageren op je bericht en bewaar ik niet langer dan nodig is voor die correspondentie.</p>

      <h2>Cloudflare Turnstile (spambescherming)</h2>
      <p>Het contactformulier gebruikt Cloudflare Turnstile om spam en geautomatiseerde inzendingen tegen te houden. Turnstile verwerkt daarvoor technische gegevens over je bezoek, zoals je IP-adres en een aantal browserkenmerken. Cloudflare treedt hierbij op als verwerker; zie het <a href="https://www.cloudflare.com/nl-nl/privacypolicy/" target="_blank" rel="noopener noreferrer">privacybeleid van Cloudflare</a>.</p>

      <h2>Google Analytics</h2>
      <p>Deze site gebruikt Google Analytics om te zien hoe de site gebruikt wordt, zodat ik 'm kan verbeteren. Google Analytics plaatst hiervoor cookies en verwerkt technische gegevens zoals je IP-adres, apparaat- en browserinformatie. Zie het <a href="https://policies.google.com/privacy?hl=nl" target="_blank" rel="noopener noreferrer">privacybeleid van Google</a>.</p>

      <h2>E-mail en hosting</h2>
      <p>Berichten via het contactformulier komen binnen op een postbus bij Microsoft 365. De website zelf draait bij een Nederlandse hostingpartij. Beide partijen verwerken gegevens uitsluitend in mijn opdracht en gebruiken ze niet voor eigen doeleinden.</p>

      <h2>Jouw rechten</h2>
      <p>Je hebt het recht om je gegevens in te zien, te corrigeren of te laten verwijderen, en je kunt bezwaar maken tegen de verwerking ervan. Neem daarvoor contact op via het <a href="index.php#contact">contactformulier</a>. Ook heb je het recht om een klacht in te dienen bij de <a href="https://www.autoriteitpersoonsgegevens.nl" target="_blank" rel="noopener noreferrer">Autoriteit Persoonsgegevens</a>.</p>

      <h2>Wijzigingen</h2>
      <p>Deze verklaring kan worden aangepast, bijvoorbeeld bij een nieuwe dienst of een wetswijziging. De datum bovenaan geeft aan wanneer 'm voor het laatst is bijgewerkt.</p>
    </section>
  </main>

  <footer>
    <div class="wrap">
      <span>© <?= date('Y') ?> EXCITED software &nbsp;·&nbsp; Kamgrasstraat 30, 2288 HE Rijswijk</span>
      <span><a href="privacyverklaring.php">Privacyverklaring</a> &nbsp;·&nbsp; KvK 27144483 &nbsp;·&nbsp; BTW NL002043019B28</span>
    </div>
  </footer>

</body>
</html>
