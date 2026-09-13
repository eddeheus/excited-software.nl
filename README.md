# excited-software.nl

Broncode van de website van [EXCITED software](https://excited-software.nl), maatwerk softwareontwikkeling in PHP en Oracle APEX, IT-beheer en hosting voor kleine bedrijven.

Bewust eenvoudig gehouden: één pagina (`index.php`), geen framework, geen build-stap, geen dependencies. PHP wordt alleen gebruikt voor het contactformulier en een paar kleine dynamische details (jaartal, PHP-versie, de captcha-check).

## Techniek

- **HTML5 + vanilla CSS/JS**, geen framework, geen bundler
- **PHP 8**, alleen voor `contact.php` en een paar dynamische stukjes in `index.php`
- **[Cloudflare Turnstile](https://www.cloudflare.com/products/turnstile/)** voor spambescherming op het contactformulier
- **JSON-LD structured data**, `robots.txt`, `sitemap.xml`, [`security.txt`](.well-known/security.txt) en [`llms.txt`](llms.txt) voor zoekmachines en AI-assistenten
- **GitHub Actions** deployt elke push naar `main` automatisch naar de server, via `rsync` over SSH (zie [.github/workflows/deploy.yml](.github/workflows/deploy.yml))

## Bestandsstructuur

```
index.php               Homepage (enige pagina)
contact.php              Verwerkt het contactformulier + Turnstile-verificatie
privacyverklaring.php    Privacyverklaring
robots.txt / sitemap.xml SEO
llms.txt                 Samenvatting voor AI-crawlers
humans.txt               Colofon
assets/
  css/style.css           Alle styling
  js/main.js              Formulierlogica, animaties, codevenster
  img/                    Logo, favicons, OG-afbeelding
config/
  turnstile.php           Turnstile site key (publiek, mag in git)
  secrets.example.php     Template voor secrets.php
  secrets.php             Turnstile secret key, niet in git
```

## Zelf draaien

```
php -S localhost:8000
```

Voor een werkend contactformulier met captcha: kopieer `config/secrets.example.php` naar `config/secrets.php` en vul een eigen [Turnstile](https://dash.cloudflare.com/?to=/:account/turnstile)-secret key in. Zonder dat bestand werkt het formulier gewoon (honeypot en rate-limit blijven actief), maar wordt de captcha-check overgeslagen.

## Deployment

Elke push naar `main` deployt automatisch naar de server. `config/secrets.php` staat buiten git en wordt niet meegedeployed; dat bestand moet los op de server staan.

---

Deze repository is openbaar zodat je kunt zien hoe de site in elkaar zit. Hergebruik van de code is niet toegestaan zonder toestemming.
