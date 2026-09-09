<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EXCITED software | Standaard in maatwerk software</title>
<meta name="description" content="EXCITED software bouwt en onderhoudt maatwerkapplicaties in PHP, Oracle APEX en PL/SQL, koppelt systemen aan elkaar en houdt je IT draaiend.">
<link rel="icon" type="image/png" href="assets/img/excited-logo-500px.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  :root {
    --bg: #f1efea;
    --panel: #ffffff;
    --ink: #1a1a1e;
    --ink-2: #5b5b64;
    --line: #dedbd3;
    --grey: #b9bcc2;
    --dark-grey: #33353a;
    --red: #da140f;
    --red-dark: #b0100c;
    --red-tint: #fbe3e2;
    --font: "Instrument Sans", system-ui, sans-serif;
    --mono: "JetBrains Mono", ui-monospace, monospace;
    --wrap: 1120px;
    --r: 18px;
  }

  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; }
  body {
    margin: 0; font-family: var(--font); color: var(--ink); background: var(--bg);
    font-size: 17px; line-height: 1.6; -webkit-font-smoothing: antialiased;
  }
  a { color: inherit; }
  :focus-visible { outline: 3px solid var(--red); outline-offset: 3px; }
  .wrap { max-width: var(--wrap); margin: 0 auto; padding: 0 28px; }

  /* Header */
  header { position: sticky; top: 0; z-index: 10; background: rgba(230,227,219,.9); backdrop-filter: blur(10px); border-bottom: 1px solid var(--line); }
  .nav { display: flex; align-items: center; justify-content: space-between; height: 68px; }
  .brand { display: flex; align-items: center; gap: 12px; text-decoration: none; font-weight: 500; letter-spacing: -.01em; }
  .brand img { height: 38px; width: 38px; display: block; border-radius: 9px; transition: transform .3s cubic-bezier(.2,.7,.2,1); }
  .brand:hover img { transform: rotate(-8deg); }
  .brand b { font-weight: 700; }
  .brand small { font-size: 1em; color: #6b6b72; font-weight: 500; }
  nav ul { list-style: none; display: flex; gap: 6px; margin: 0; padding: 0; }
  nav a { text-decoration: none; color: var(--ink-2); font-weight: 500; font-size: 15px; padding: 8px 14px; border-radius: 999px; transition: background .15s, color .15s; }
  nav a:hover { color: var(--ink); background: rgba(255,255,255,.7); }
  nav a.cta { background: var(--ink); color: #fff; }
  nav a.cta:hover { background: var(--red); color: #fff; }
  @media (max-width: 640px) { nav a:not(.cta) { display: none; } }

  /* Hero */
  .hero { padding: 88px 0 80px; position: relative; overflow: hidden; }
  .hero::before {
    content: ""; position: absolute; inset: 0; pointer-events: none;
    background-image: radial-gradient(var(--line) 1.2px, transparent 1.2px);
    background-size: 26px 26px;
    -webkit-mask-image: radial-gradient(ellipse 70% 80% at 65% 40%, #000 20%, transparent 70%);
    mask-image: radial-gradient(ellipse 70% 80% at 65% 40%, #000 20%, transparent 70%);
  }
  .hero-grid { display: grid; grid-template-columns: 1.1fr .9fr; gap: 56px; align-items: center; position: relative; }
  @media (max-width: 860px) { .hero-grid { grid-template-columns: 1fr; gap: 44px; } .hero { padding: 56px 0 56px; } }

  .pill {
    display: inline-flex; align-items: center; gap: 9px; font-size: 14px; font-weight: 500;
    background: var(--panel); border: 1px solid var(--line); padding: 7px 14px 7px 10px; border-radius: 999px; margin-bottom: 22px;
    opacity: 0; animation: fade .6s ease .1s forwards;
  }
  .pill i { width: 9px; height: 9px; border-radius: 50%; background: var(--red); box-shadow: 0 0 0 0 rgba(218,20,15,.4); animation: pulse 2.2s ease-out infinite; }
  @keyframes pulse { 70% { box-shadow: 0 0 0 9px rgba(218,20,15,0); } 100% { box-shadow: 0 0 0 0 rgba(218,20,15,0); } }

  h1 { font-size: clamp(42px, 6.2vw, 78px); line-height: 1.04; letter-spacing: -.035em; font-weight: 700; margin: 0 0 26px; }
  h1 .line { display: block; overflow: hidden; padding-bottom: .06em; margin-bottom: -.06em; }
  h1 .line > span { display: block; transform: translateY(110%); animation: rise .9s cubic-bezier(.2,.7,.2,1) forwards; }
  h1 .line:nth-child(2) > span { animation-delay: .12s; }
  h1 .line:nth-child(3) > span { animation-delay: .24s; }
  @keyframes rise { to { transform: translateY(0); } }

  /* Onderstreping als "marker": een achtergrond die van 0 naar 100% breedte groeit. Geen positionering, dus loopt altijd netjes mee met de tekst. */
  .mark-under {
    background-image: linear-gradient(var(--red), var(--red));
    background-repeat: no-repeat;
    background-position: 0 92%;
    background-size: 0% .07em;
    animation: draw .75s cubic-bezier(.2,.7,.2,1) .85s forwards;
  }
  @keyframes draw { to { background-size: 100% .07em; } }

  .lead { font-size: 20px; color: var(--ink-2); max-width: 32em; margin: 0 0 34px; opacity: 0; animation: fade .8s ease .6s forwards; }
  @keyframes fade { to { opacity: 1; } }
  .actions { display: flex; gap: 14px; flex-wrap: wrap; opacity: 0; animation: fade .8s ease .8s forwards; }
  .btn { display: inline-flex; align-items: center; gap: 10px; padding: 15px 24px; border-radius: 999px; text-decoration: none; font-weight: 600; font-size: 16px; line-height: 1; border: 0; cursor: pointer; font-family: inherit; transition: transform .15s ease, background .15s ease, box-shadow .15s ease; }
  .btn:hover { transform: translateY(-2px); }
  .btn:active { transform: scale(.98); }
  .btn-red { background: var(--red); color: #fff; box-shadow: 0 10px 24px -12px rgba(218,20,15,.7); }
  .btn-red:hover { background: var(--red-dark); }
  .btn .spin { display: none; width: 16px; height: 16px; border: 2.5px solid rgba(255,255,255,.35); border-top-color: #fff; border-radius: 50%; animation: turn .7s linear infinite; }
  .btn.busy .spin { display: block; }
  .btn.busy { pointer-events: none; opacity: .85; }
  @keyframes turn { to { transform: rotate(360deg); } }
  .btn-ghost { background: var(--panel); border: 1.5px solid var(--line); color: var(--ink); }
  .btn-ghost:hover { border-color: var(--ink); }

  /* Code window, licht scheef als een sticker */
  .code-wrap { position: relative; opacity: 0; animation: fade .8s ease .9s forwards; }
  .code {
    background: var(--ink); color: #e8e8ec; border-radius: 16px; font-family: var(--mono); font-size: 13.5px; line-height: 1.7;
    box-shadow: 0 40px 70px -30px rgba(26,26,30,.55);
    transform: rotate(-1.5deg); transition: transform .4s cubic-bezier(.2,.7,.2,1);
  }
  .code-wrap:hover .code { transform: rotate(0deg); }
  .code-bar { display: flex; align-items: center; gap: 8px; padding: 12px 16px; border-bottom: 1px solid rgba(255,255,255,.08); }
  .code-bar i { width: 10px; height: 10px; border-radius: 50%; background: rgba(255,255,255,.18); display: block; }
  .code-bar i:first-child { background: var(--red); }
  .code-bar em { font-style: normal; margin-left: auto; color: var(--grey); font-size: 12px; }
  .code pre { margin: 0; padding: 18px 20px 22px; white-space: pre; overflow-x: auto; min-height: 236px; }
  .k { color: #ff8a80; } .s { color: #b6e3a8; } .c { color: rgba(255,255,255,.4); } .v { color: #9ecbff; }
  .caret { display: inline-block; width: 7px; height: 1.1em; background: var(--red); vertical-align: -.2em; animation: blink 1s steps(1) infinite; }
  @keyframes blink { 50% { opacity: 0; } }
  .sticker {
    position: absolute; right: -10px; top: -18px; z-index: 2; background: var(--red); color: #fff; font-weight: 700; font-size: 13px;
    padding: 8px 14px; border-radius: 999px; transform: rotate(6deg); box-shadow: 0 8px 20px -8px rgba(218,20,15,.8);
  }

  /* Secties */
  section { padding: 88px 0; scroll-margin-top: 24px; }
  #werkwijze { scroll-margin-top: 100px; }
  h2 { font-size: clamp(28px, 3.6vw, 40px); letter-spacing: -.025em; line-height: 1.1; margin: 0 0 14px; font-weight: 700; }
  .soft { color: #8e8e95; }
  .card.red .soft { color: var(--grey); }
  .intro { color: var(--ink-2); font-size: 18px; max-width: 36em; margin: 0 0 40px; }

  .services { list-style: none; padding: 0; margin: 0; display: grid; gap: 12px; counter-reset: s; }
  .services li {
    background: var(--panel); border-radius: var(--r); padding: 28px 30px;
    display: grid; grid-template-columns: 64px 300px 1fr; gap: 24px; align-items: start;
    border: 1px solid transparent; transition: transform .25s cubic-bezier(.2,.7,.2,1), border-color .25s, box-shadow .25s;
  }
  /* Startstand: alle kaarten liggen als een stapel op de plek van de eerste en waaieren naar beneden uit. */
  .services.stack li { transition: transform .9s cubic-bezier(.2,.75,.2,1), opacity .4s ease, box-shadow .9s ease; box-shadow: 0 20px 40px -30px rgba(26,26,30,.45); }
  .services.stack:not(.in) li { transform: translateY(var(--dy)) scale(calc(1 - var(--n) * .03)) rotate(calc(var(--n) * -1.2deg)); z-index: calc(10 - var(--n)); }
  .services.stack:not(.in) li:not(:first-child) { opacity: .9; }
  .services li:hover { transform: translateX(6px); border-color: var(--red-tint); box-shadow: 0 20px 40px -30px rgba(26,26,30,.35); }
  .services li::before {
    counter-increment: s; content: counter(s, decimal-leading-zero);
    font-family: var(--mono); font-size: 14px; font-weight: 500; color: var(--red);
    background: var(--red-tint); width: 44px; height: 44px; border-radius: 12px; display: grid; place-items: center;
  }
  .services h3 { margin: 0; font-size: 20px; font-weight: 600; letter-spacing: -.01em; }
  .services p { margin: 0; color: var(--ink-2); max-width: 40em; }
  .services .tech { display: block; margin-top: 6px; font-family: var(--mono); font-size: 12.5px; color: #8e8e95; }
  @media (max-width: 860px) { .services li { grid-template-columns: 44px 1fr; } .services p { grid-column: 2; } }

  /* Werkwijze + over */
  .two { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
  @media (max-width: 860px) { .two { grid-template-columns: 1fr; } }
  .card { background: var(--panel); border-radius: var(--r); padding: 40px; position: relative;
    transition: transform .85s cubic-bezier(.2,.75,.2,1), opacity .5s ease; }
  /* Startstand: de blokken staan op elkaars plek en schuiven bij binnenkomst langs elkaar naar hun eigen plek. */
  .two:not(.in) .card:first-child { transform: translateX(calc(100% + 24px)); opacity: 0; }
  .two:not(.in) .card:last-child  { transform: translateX(calc(-100% - 24px)) rotate(-2deg); opacity: 0; }
  .card.red { z-index: 1; }
  @media (max-width: 860px) {
    .two:not(.in) .card:first-child { transform: translateX(-40px); }
    .two:not(.in) .card:last-child  { transform: translateX(40px); }
  }
  .card.red { background: var(--dark-grey); color: #fff; }
  .card.red h2 { color: #fff; }
  .card.red p { color: var(--grey); }
  .card.red strong { color: #fff; }
  .card p { color: var(--ink-2); margin: 0 0 16px; max-width: 34em; }
  .card p strong { color: var(--ink); font-weight: 600; }
  .facts { list-style: none; padding: 0; margin: 24px 0 0; display: grid; gap: 10px; }
  .facts li { display: flex; gap: 12px; align-items: baseline; }
  .facts li::before { content: ""; width: 10px; height: 10px; flex: none; background: var(--red); border-radius: 3px; transform: translateY(-1px) rotate(45deg); }

  /* Slogan die zichzelf schrijft */
  .slogan-band { padding: 40px 0 96px; text-align: center; }
  .slogan-band p { margin: 0; font-size: clamp(30px, 5vw, 60px); font-weight: 700; letter-spacing: -.03em; line-height: 1.1; min-height: 1.1em; }
  .slogan-band .soft { color: #8e8e95; }
  .slogan-band .caret2 { display: inline-block; width: .08em; height: .95em; background: var(--red); vertical-align: -.1em; margin-left: .06em; border-radius: 2px; animation: blink 1s steps(1) infinite; }
  .slogan-band .caret2.off { transition: opacity .6s ease; opacity: 0; }

  /* Contact */
  .contact { padding-top: 0; }
  .contact .wrap { display: grid; grid-template-columns: .9fr 1.1fr; gap: 48px; align-items: start; }
  @media (max-width: 860px) { .contact { padding-top: 0; }
  .contact .wrap { grid-template-columns: 1fr; } }
  .contact p { color: var(--ink-2); max-width: 30em; margin: 0 0 18px; }
  form { background: var(--panel); border-radius: var(--r); padding: 32px; display: grid; gap: 16px; position: relative; overflow: hidden;
    opacity: 0; transform: translateY(28px); transition: opacity .7s ease, transform .7s cubic-bezier(.2,.7,.2,1); }
  form.in { opacity: 1; transform: none; }
  form > *:not(.done) { transition: opacity .35s ease, transform .35s ease; }
  form.sent > *:not(.done) { opacity: 0; transform: scale(.97); pointer-events: none; }
  .done { position: absolute; inset: 0; display: grid; place-content: center; text-align: center; gap: 10px; padding: 32px;
    opacity: 0; pointer-events: none; transition: opacity .4s ease .25s; }
  form.sent .done { opacity: 1; pointer-events: auto; }
  .done svg { width: 72px; height: 72px; margin: 0 auto 6px; }
  .done circle { fill: var(--red-tint); stroke: var(--red); stroke-width: 2.5; stroke-dasharray: 220; stroke-dashoffset: 220; }
  .done path { fill: none; stroke: var(--red); stroke-width: 4; stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 60; stroke-dashoffset: 60; }
  form.sent .done circle { animation: dash .6s ease .3s forwards; }
  form.sent .done path { animation: dash .45s ease .75s forwards; }
  @keyframes dash { to { stroke-dashoffset: 0; } }
  .done strong { font-size: 20px; letter-spacing: -.01em; }
  .done p { margin: 0; }
  .done button { background: none; border: 0; color: var(--red); font: inherit; font-weight: 600; cursor: pointer; padding: 6px; }
  .done button:hover { text-decoration: underline; }
  .row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  @media (max-width: 560px) { .row { grid-template-columns: 1fr; } }
  label { display: grid; gap: 6px; font-size: 14px; font-weight: 500; transition: color .15s; }
  label:focus-within { color: var(--red); }
  input, textarea {
    font: inherit; font-size: 16px; padding: 13px 15px; border: 1.5px solid transparent; border-radius: 12px; background: #e6e3db; color: var(--ink); width: 100%;
    transition: border-color .15s, background .15s, box-shadow .2s;
  }
  input:focus, textarea:focus { outline: none; border-color: var(--red); background: #fff; box-shadow: 0 0 0 4px var(--red-tint); }
  textarea { min-height: 130px; resize: vertical; }
  .hp { position: absolute; left: -9999px; }
  .form-foot { display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
  .msg { font-size: 15px; color: #8e8e95; }
  .msg.ok { color: #1c7a3a; font-weight: 500; }
  .msg.err { color: var(--red); font-weight: 500; }

  footer { padding: 36px 0; font-size: 14px; color: #7d7d84; background: #e6e3db; border-top: 1px solid var(--line); }
  footer .wrap { display: flex; justify-content: space-between; gap: 16px; flex-wrap: wrap; }

  @media (prefers-reduced-motion: reduce) {
    h1 .line > span, .mark-under, .lead, .actions, .code-wrap, .pill { animation: none; opacity: 1; transform: none; background-size: 100% .07em; }
    .caret, .pill i { animation: none; }
    .code { transform: none; }
    form { opacity: 1; transform: none; transition: none; }
    .two:not(.in) .card { transform: none; opacity: 1; }
    .services.stack:not(.in) li { transform: none; opacity: 1; }
    .done circle, .done path { stroke-dashoffset: 0; animation: none; }
    html { scroll-behavior: auto; }
  }
</style>
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
    <span>© <span id="year"></span> EXCITED software, Rijswijk</span>
    <span>KvK 27144483 &nbsp;·&nbsp; btw-id NL002043019B28</span>
  </div>
</footer>

<script>
  document.getElementById('year').textContent = new Date().getFullYear();

  /* Codevenster: typt een PHP-voorbeeld, wisselt daarna een keer naar PL/SQL. */
  const snippets = [
    { file: 'OrderService.php', label: 'PHP 8.5', code:
`<span class="k">final class</span> OrderService
{
    <span class="k">public function</span> __construct(
        <span class="k">private readonly</span> PDO <span class="v">$db</span>,
        <span class="k">private readonly</span> Mailer <span class="v">$mailer</span>,
    ) {}

    <span class="k">public function</span> confirm(<span class="k">int</span> <span class="v">$orderId</span>): <span class="k">void</span>
    {
        <span class="v">$order</span> = <span class="k">$this</span>->find(<span class="v">$orderId</span>);
        <span class="k">$this</span>->mailer->send(<span class="k">new</span> OrderConfirmed(<span class="v">$order</span>));
        <span class="c">// klant heeft z'n bevestiging binnen</span>
    }
}` },
    { file: 'pkg_orders.pkb', label: 'PL/SQL', code:
`<span class="k">create or replace package body</span> pkg_orders <span class="k">as</span>

  <span class="k">procedure</span> sync_to_webshop(p_order_id <span class="k">in number</span>) <span class="k">is</span>
    l_json clob;
  <span class="k">begin</span>
    l_json := get_order_json(p_order_id);
    apex_web_service.make_rest_request(
      p_url         => <span class="s">'https://shop.klant.nl/api/orders'</span>,
      p_http_method => <span class="s">'POST'</span>,
      p_body        => l_json);
    <span class="c">-- order staat in de webshop</span>
  <span class="k">end</span> sync_to_webshop;

<span class="k">end</span> pkg_orders;` }
  ];

  const pre = document.getElementById('code');
  const fname = document.getElementById('fname');
  const sticker = document.getElementById('sticker');
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function show(s) { fname.textContent = s.file; sticker.textContent = s.label; pre.innerHTML = s.code; }
  function type(s, done) {
    fname.textContent = s.file;
    sticker.textContent = s.label;
    const tokens = s.code.split(/(<[^>]+>)/);
    let out = '', ti = 0, ci = 0;
    (function step() {
      if (ti >= tokens.length) { pre.innerHTML = out; done && done(); return; }
      const t = tokens[ti];
      if (t.startsWith('<')) { out += t; ti++; }
      else if (ci < t.length) { out += t[ci++]; }
      else { ti++; ci = 0; }
      pre.innerHTML = out + '<span class="caret"></span>';
      setTimeout(step, t.startsWith('<') ? 0 : 14);
    })();
  }
  if (reduce) show(snippets[0]);
  else setTimeout(() => type(snippets[0], () => setTimeout(() => type(snippets[1]), 7000)), 1300);

  /* Contactformulier: verstuurt naar contact.php zonder pagina-herlaad. */
  const form = document.getElementById('contactform');
  const msg = document.getElementById('formmsg');
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const btn = form.querySelector('button[type=submit]');
    if (!form.checkValidity()) { msg.className = 'msg err'; msg.textContent = 'Vul je naam, e-mailadres en bericht in.'; return; }
    btn.classList.add('busy'); btn.querySelector('.txt').textContent = 'Versturen'; msg.className = 'msg'; msg.textContent = '';
    try {
      const r = await fetch('contact.php', { method: 'POST', body: new FormData(form), headers: { 'Accept': 'application/json' } });
      const j = await r.json();
      if (j.ok) { form.reset(); form.classList.add('sent'); }
      else { msg.className = 'msg err'; msg.textContent = j.error || 'Versturen is niet gelukt. Probeer het later nog eens.'; }
    } catch { msg.className = 'msg err'; msg.textContent = 'Versturen is niet gelukt. Probeer het later nog eens.'; }
    btn.classList.remove('busy'); btn.querySelector('.txt').textContent = 'Verstuur bericht';
  });
  document.getElementById('again').addEventListener('click', () => { form.classList.remove('sent'); form.querySelector('input').focus(); });

  /* Formulier en de twee blokken laten binnenkomen zodra ze in beeld scrollen. */
  const services = document.querySelector('.services');
  const cards = [...services.children];
  function stackCards() {
    const top = cards[0].offsetTop;
    cards.forEach((li, n) => { li.style.setProperty('--dy', (top - li.offsetTop) + 'px'); li.style.setProperty('--n', n); li.style.transitionDelay = (n * 90) + 'ms'; });
    services.classList.add('stack');
  }
  stackCards();
  const reveal = [form, document.querySelector('.two'), services];
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries, obs) => {
      entries.forEach(en => { if (en.isIntersecting) { en.target.classList.add('in'); obs.unobserve(en.target); } });
    }, { threshold: .25 });
    reveal.forEach(el => io.observe(el));
  } else reveal.forEach(el => el.classList.add('in'));
  /* Slogan letter voor letter schrijven zodra hij in beeld komt. */
  const slogan = document.getElementById('slogan');
  function writeSlogan() {
    const text = slogan.dataset.text, soft = slogan.dataset.soft, start = text.indexOf(soft), end = start + soft.length;
    const caret = slogan.querySelector('.caret2');
    const render = n => {
      const done = text.slice(0, n);
      slogan.innerHTML = (n > start
        ? done.slice(0, start) + '<span class="soft">' + done.slice(start, end) + '</span>' + done.slice(end)
        : done) + caret.outerHTML;
    };
    if (reduce) { render(text.length); slogan.querySelector('.caret2').remove(); return; }
    let i = 0;
    (function step() {
      render(++i);
      if (i < text.length) setTimeout(step, text[i - 1] === ' ' ? 140 : 70);
      else setTimeout(() => slogan.querySelector('.caret2').classList.add('off'), 1800);
    })();
  }
  if ('IntersectionObserver' in window) {
    new IntersectionObserver((en, obs) => { if (en[0].isIntersecting) { writeSlogan(); obs.disconnect(); } }, { threshold: .6 }).observe(slogan);
  } else writeSlogan();

  services.addEventListener('transitionend', () => { if (services.classList.contains('in')) cards.forEach(li => li.style.transitionDelay = ''); });
</script>
</body>
</html>
