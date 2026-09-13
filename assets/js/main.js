  /* Codevenster: typt om de beurt een PHP-, PL/SQL- en JavaScript-voorbeeld. */
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

<span class="k">end</span> pkg_orders;` },
    { file: 'debounce.js', label: 'JavaScript', code:
`<span class="k">export function</span> debounce(<span class="v">fn</span>, <span class="v">wait</span> = 300) {
    <span class="k">let</span> <span class="v">timer</span>;
    <span class="k">return</span> (...args) => {
        clearTimeout(<span class="v">timer</span>);
        <span class="v">timer</span> = setTimeout(() => fn(...args), <span class="v">wait</span>);
    };
}

<span class="k">const</span> <span class="v">zoekInput</span> = document.querySelector(<span class="s">'#zoek'</span>);
zoekInput.addEventListener(<span class="s">'input'</span>, debounce((e) => {
    zoekResultaten(e.target.value);
    <span class="c">// pas zoeken als de gebruiker even stopt met typen</span>
}, 250));` }
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
  function cycle(i) {
    type(snippets[i], () => setTimeout(() => cycle((i + 1) % snippets.length), 7000));
  }
  if (reduce) show(snippets[0]);
  else setTimeout(() => cycle(0), 1300);

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
      else {
        msg.className = 'msg err'; msg.textContent = j.error || 'Versturen is niet gelukt. Probeer het later nog eens.';
        window.turnstile?.reset(); // token is eenmalig; nieuwe nodig voor de volgende poging
      }
    } catch {
      msg.className = 'msg err'; msg.textContent = 'Versturen is niet gelukt. Probeer het later nog eens.';
      window.turnstile?.reset();
    }
    btn.classList.remove('busy'); btn.querySelector('.txt').textContent = 'Verstuur bericht';
  });
  document.getElementById('again').addEventListener('click', () => {
    form.classList.remove('sent'); form.querySelector('input').focus();
    window.turnstile?.reset(); // ook hier: vorig token is al verbruikt
  });

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
