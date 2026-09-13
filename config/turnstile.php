<?php

declare(strict_types=1);

/**
 * Publieke Cloudflare Turnstile site key — mag in git, wordt in de HTML gebruikt.
 * Aanmaken/beheren: dash.cloudflare.com → Turnstile → widget voor excited-software.nl.
 * Zolang hier de placeholder in staat, wordt de captcha niet geladen (zie index.php).
 */
const TURNSTILE_SITE_KEY = '0x4AAAAAAEy9z7sSrlu_rZt5';
