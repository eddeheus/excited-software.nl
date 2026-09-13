<?php

declare(strict_types=1);

require __DIR__ . '/config/turnstile.php';
// Widget/script pas laden zodra er een echte site key is ingevuld, anders geeft
// Cloudflare een foutmelding voor de placeholder.
$turnstileEnabled = TURNSTILE_SITE_KEY !== 'VUL_HIER_JE_SITE_KEY_IN';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-W8LT5D3NC7"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-W8LT5D3NC7');
  </script>
  <title>EXCITED software | Standaard in maatwerk software</title>
  <meta name="description" content="EXCITED software bouwt en onderhoudt maatwerkapplicaties in PHP, Oracle APEX en PL/SQL, koppelt systemen aan elkaar en houdt je IT draaiend.">
  <meta name="author" content="Ed de Heus">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <link rel="canonical" href="https://excited-software.nl/">
  <meta name="theme-color" content="#da140f">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="EXCITED software">
  <meta property="og:title" content="EXCITED software | Standaard in maatwerk software">
  <meta property="og:description" content="Maatwerkapplicaties in PHP en Oracle APEX, systeemkoppelingen en IT-beheer voor kleine bedrijven. Eén aanspreekpunt, geen tussenlagen.">
  <meta property="og:url" content="https://excited-software.nl/">
  <meta property="og:locale" content="nl_NL">
  <meta property="og:image" content="https://excited-software.nl/assets/img/og-image.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="EXCITED software — Software die gewoon werkt.">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="EXCITED software | Standaard in maatwerk software">
  <meta name="twitter:description" content="Maatwerkapplicaties in PHP en Oracle APEX, systeemkoppelingen en IT-beheer voor kleine bedrijven.">
  <meta name="twitter:image" content="https://excited-software.nl/assets/img/og-image.png">

  <link rel="icon" href="assets/img/favicon.ico" sizes="any">
  <link rel="icon" type="image/png" href="assets/img/excited-logo-500px.png" sizes="500x500">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <?php if ($turnstileEnabled): ?>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
  <?php endif; ?>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Person",
          "@id": "https://excited-software.nl/#ed",
          "name": "Ed de Heus",
          "jobTitle": "Softwareontwikkelaar",
          "url": "https://excited-software.nl/",
          "sameAs": [
            "https://github.com/eddeheus",
            "https://www.linkedin.com/in/eddeheus/"
          ]
        },
        {
          "@type": "ProfessionalService",
          "@id": "https://excited-software.nl/#business",
          "name": "EXCITED software",
          "url": "https://excited-software.nl/",
          "logo": "https://excited-software.nl/assets/img/excited-logo-500px.png",
          "image": "https://excited-software.nl/assets/img/og-image.png",
          "description": "EXCITED software bouwt en onderhoudt maatwerkapplicaties in PHP en Oracle APEX, koppelt systemen aan elkaar en houdt de IT van kleine bedrijven draaiend.",
          "founder": { "@id": "https://excited-software.nl/#ed" },
          "employee": { "@id": "https://excited-software.nl/#ed" },
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kamgrasstraat 30",
            "postalCode": "2288 HE",
            "addressLocality": "Rijswijk",
            "addressRegion": "Zuid-Holland",
            "addressCountry": "NL"
          },
          "areaServed": { "@type": "Country", "name": "Nederland" },
          "knowsLanguage": ["nl", "en"],
          "knowsAbout": [
            "PHP", "Oracle APEX", "PL/SQL", "Oracle Database",
            "Systeemintegratie", "API-koppelingen", "Applicatiebeheer",
            "Legacy PHP-migratie", "Microsoft 365"
          ],
          "identifier": [
            { "@type": "PropertyValue", "name": "KvK", "value": "27144483" },
            { "@type": "PropertyValue", "name": "btw-id", "value": "NL002043019B28" }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Diensten",
            "itemListElement": [
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Webapplicaties in PHP", "description": "Maatwerk webapps die precies doen wat jouw proces vraagt: klantportalen, planningstools, backoffice en bestelsystemen." } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bestaande PHP-code moderniseren", "description": "Oude PHP-applicaties stap voor stap naar een actuele, ondersteunde PHP-versie brengen zonder dat het bedrijf stilligt." } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Applicaties in Oracle APEX", "description": "Bedrijfsapplicaties, portalen en beheerschermen bovenop een Oracle-database, inclusief PL/SQL, onderhoud en support." } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Koppelingen en data-integraties", "description": "API-koppelingen, imports en exports tussen systemen, en HTML-mailings die in elke mailclient goed weergeven." } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "IT-support en beheer", "description": "Werkplekken, Microsoft 365, mail, servers en hosting van applicaties via één aanspreekpunt." } }
            ]
          }
        },
        {
          "@type": "WebSite",
          "@id": "https://excited-software.nl/#website",
          "url": "https://excited-software.nl/",
          "name": "EXCITED software",
          "inLanguage": "nl-NL",
          "publisher": { "@id": "https://excited-software.nl/#business" }
        }
      ]
    }
  </script>
</head>
<body>

  <header>
    <div class="wrap nav">
      <a class="brand" href="#top" aria-label="EXCITED software, naar boven">
        <img src="assets/img/excited-logo-500px.png" alt="" width="38" height="38">
        <span><b>EXCITED</b> <small>software</small></span>
      </a>
      <nav aria-label="Hoofdmenu">
        <ul>
          <li><a href="#diensten">Diensten</a></li>
          <li><a href="#werkwijze">Werkwijze</a></li>
          <li><a class="cta" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="top">
    <section class="hero">
      <div class="wrap hero-grid">
        <div>
          <span class="pill"><i></i> Ruimte voor nieuwe projecten</span>
          <h1>
            <span class="line"><span>Software die</span></span>
            <span class="line"><span><span class="mark-under soft">gewoon</span> werkt.</span></span>
          </h1>
          <p class="lead">
            EXCITED software bouwt en onderhoudt maatwerkapplicaties in PHP en Oracle APEX,
            koppelt systemen aan elkaar en houdt de IT van kleine bedrijven draaiend.
            Eén aanspreekpunt, geen tussenlagen.
          </p>
          <div class="actions">
            <a class="btn btn-red" href="#contact">Stuur een bericht</a>
            <a class="btn btn-ghost" href="#diensten">Wat wij doen</a>
          </div>
        </div>

        <div class="code-wrap" aria-hidden="true">
          <span class="sticker" id="sticker">PHP 8.5</span>
          <div class="code">
            <div class="code-bar"><i></i><i></i><i></i><em id="fname">OrderService.php</em></div>
            <pre id="code"></pre>
          </div>
        </div>
      </div>
    </section>

    <section id="diensten">
      <div class="wrap">
        <h2>Wat wij voor je <span class="soft">kunnen</span> doen</h2>
        <p class="intro">Geen buzzwords, wel software die al jaren in productie draait bij klanten.</p>
        <ul class="services">
          <li>
            <h3>Webapplicaties in PHP <span class="tech">PHP 8.5 · MySQL · JavaScript · CSS</span></h3>
            <p>Maatwerk webapps die precies doen wat jouw proces vraagt: klantportalen, planningstools, backoffice en bestelsystemen. Moderne PHP, netjes gestructureerd en gehost waar jij dat wilt.</p>
          </li>
          <li>
            <h3>Bestaande PHP-code moderniseren <span class="tech">upgrades · PHP 5/7 naar 8 · beveiliging</span></h3>
            <p>Draait er nog een oude PHP-applicatie die niemand meer durft aan te raken? Wij brengen hem stap voor stap naar een actuele PHP-versie, zonder dat je bedrijf stilligt.</p>
          </li>
          <li>
            <h3>Applicaties in Oracle APEX <span class="tech">Oracle Database · PL/SQL · APEX</span></h3>
            <p>Bedrijfsapplicaties, portalen en beheerschermen bovenop je Oracle-database. Van een nieuw scherm tot een complete applicatie, inclusief onderhoud en support voor de gebruikers.</p>
          </li>
          <li>
            <h3>Koppelingen en data-integraties <span class="tech">API's · imports en exports · HTML-mail</span></h3>
            <p>Systemen die met elkaar praten in plaats van dubbel overtypen. Ook HTML-mailings die er in elke mailclient goed uitzien.</p>
          </li>
          <li>
            <h3>IT-support en beheer <span class="tech">Microsoft 365 · servers · hosting</span></h3>
            <p>Voor klanten die één nummer willen bellen als iets niet werkt. Werkplekken, mail, servers en de hosting van je applicaties.</p>
          </li>
        </ul>
      </div>
    </section>

    <section id="werkwijze" style="padding-top:0">
      <div class="wrap two">
        <div class="card">
          <h2>Zo werken <span class="soft">wij</span></h2>
          <p>We beginnen met een gesprek over wat er nu niet lekker loopt. Daarna krijg je een concreet voorstel: wat we gaan bouwen, wat het kost en wanneer het klaar is.</p>
          <p>Tijdens het bouwen zie je regelmatig tussenversies, zodat we op tijd kunnen bijsturen. <strong>Na oplevering blijven we beschikbaar</strong> voor vragen, aanpassingen en onderhoud. Veel klanten werken al jaren met ons samen.</p>
        </div>
        <div class="card red">
          <h2>Wie zijn <span class="soft">wij</span>?</h2>
          <p>Eerlijk is eerlijk: EXCITED software is een eenmanszaak. Ik ben Ed, softwareontwikkelaar uit Rijswijk. Als je met ons werkt, praat je dus rechtstreeks met degene die je software bouwt en onderhoudt. Geen overdracht, geen ruis.</p>
          <ul class="facts">
            <li>Jarenlange ervaring met PHP en Oracle in productieomgevingen</li>
            <li>Rechtstreeks contact, geen accountmanager ertussen</li>
            <li>Op locatie in de regio Den Haag/Rotterdam of remote</li>
            <li>Nederlands en Engels</li>
          </ul>
          <div class="socials">
            <a href="https://www.linkedin.com/in/eddeheus/" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a>
            <a href="https://github.com/eddeheus" target="_blank" rel="noopener noreferrer">GitHub ↗</a>
          </div>
        </div>
      </div>
    </section>

    <section class="slogan-band" aria-label="Slogan">
      <div class="wrap">
        <p id="slogan" data-text="Standaard in maatwerk software" data-soft="maatwerk"><span class="caret2"></span></p>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="wrap">
        <div>
          <h2>Iets <span class="soft">bespreken</span>?</h2>
          <p>Vertel kort wat je wilt bouwen of wat er niet werkt. Je krijgt binnen een werkdag reactie, zonder verplichtingen.</p>
          <p>Liever bellen? Zet je nummer in het bericht, dan bellen we je terug.</p>
        </div>
        <form id="contactform" action="contact.php" method="post" novalidate>
          <div class="row">
            <label>Naam <input type="text" name="naam" required autocomplete="name"></label>
            <label>E-mailadres <input type="email" name="email" required autocomplete="email"></label>
          </div>
          <label>Bedrijf (optioneel) <input type="text" name="bedrijf" autocomplete="organization"></label>
          <label>Waar kunnen we je mee helpen? <textarea name="bericht" required></textarea></label>
          <div class="hp" aria-hidden="true"><label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
          <?php if ($turnstileEnabled): ?>
          <div class="cf-turnstile" data-sitekey="<?= htmlspecialchars(TURNSTILE_SITE_KEY, ENT_QUOTES) ?>" data-theme="light"></div>
          <?php endif; ?>
          <div class="form-foot">
            <button class="btn btn-red" type="submit"><span class="spin" aria-hidden="true"></span><span class="txt">Verstuur bericht</span></button>
            <span class="msg" id="formmsg" aria-live="polite"></span>
          </div>
          <div class="done" aria-live="polite">
            <svg viewBox="0 0 80 80" aria-hidden="true"><circle cx="40" cy="40" r="35"/><path d="M25 41 L36 52 L56 30"/></svg>
            <strong>Bericht verstuurd</strong>
            <p>Bedankt, je hoort snel van ons.</p>
            <button type="button" id="again">Nog een bericht sturen</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <footer>
    <div class="wrap">
      <span>© <?= date('Y') ?> EXCITED software &nbsp;·&nbsp; Kamgrasstraat 30, 2288 HE Rijswijk</span>
      <span><a href="privacyverklaring.php">Privacyverklaring</a> &nbsp;·&nbsp; KvK 27144483 &nbsp;·&nbsp; BTW NL002043019B28</span>
    </div>
  </footer>

  <script src="assets/js/main.js"></script>
</body>
</html>