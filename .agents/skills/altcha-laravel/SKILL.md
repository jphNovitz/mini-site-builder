---
name: altcha-laravel
description: Install and configure the Altcha proof-of-work captcha (grantholle/laravel-altcha) in a Laravel app, and diagnose the common failure modes. Use when adding anti-bot/anti-spam protection to a public form, or when an altcha-widget shows "Verification failed" or never fetches a challenge.
---

# Altcha + Laravel (grantholle/laravel-altcha)

Self-hosted, no-third-party-service proof-of-work captcha. No API keys to request from anyone, no external dependency to wait on — the whole thing runs inside your own app. This is why it beats reCAPTCHA/hCaptcha for most Laravel apps: nothing to sign up for, nothing calling out to a third party.

## Install

```sh
composer require grantholle/laravel-altcha
php artisan vendor:publish --tag="altcha-config"
```

Set a real random value in `.env` (and leave the placeholder empty in `.env.example`):

```sh
php -r "echo bin2hex(random_bytes(32));"
```

```
ALTCHA_HMAC_KEY=<the generated value>
```

**This step is easy to get wrong by hand-editing `.env`.** A line like `ALTCHA_HMAC_KEY` with no `=` is silently read as `null` by Laravel — no error at boot, it only surfaces later as a 500 on the challenge endpoint (see Troubleshooting).

The package auto-registers `GET /altcha-challenge` (configurable via `config/altcha.php`'s `route` key) — nothing to write server-side to generate challenges.

## Load the JS widget

If the project uses Vite (it almost certainly does), bundle the official `altcha` npm package rather than pulling a CDN script — one less external dependency, and it's fingerprinted/cached with the rest of your assets:

```sh
npm install altcha
```

```js
// resources/js/app.js
import "altcha";
```

This is a **side-effect import**: importing it registers the `<altcha-widget>` custom element globally (`customElements.define(...)` internally). Nothing else to call.

Then make sure `app.js` is actually loaded on the page — it's easy to have `@vite(...)` only reference the CSS entrypoint and forget the JS one:

```blade
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

## The widget tag

```blade
<altcha-widget challenge="/altcha-challenge"></altcha-widget>
```

**The attribute is `challenge`, not `challengeurl`.** `challengeurl` was the attribute name in an older/other version of the Altcha widget and is *silently ignored* by this one (unrecognized custom-element attribute) — the widget falls back to its default empty `challenge` config, which makes it `fetch("")`, i.e. **fetch the current page itself**. This produces a very confusing symptom: "Server responded with invalid content-type, expected application/json, received text/html" — because the "response" is genuinely the page's own HTML, not an error. See Troubleshooting below; this is the #1 time-sink with this package.

If the form is shared between a public (guest) flow and an authenticated/admin flow (e.g. a reusable Blade component for create+edit), scope the widget to guests only:

```blade
@guest
    <altcha-widget challenge="/altcha-challenge"></altcha-widget>
@endguest
```

## Server-side validation

```php
use GrantHolle\Altcha\Rules\ValidAltcha;

public function rules(): array
{
    return [
        // ...
        'altcha' => auth()->check() ? ['nullable'] : new ValidAltcha(),
    ];
}
```

Mirror whatever `@guest` scoping you used in the Blade template — an authenticated/admin submission through the same form must never be blocked by a missing captcha token. The field name (`altcha`) must match the widget's `name` config (default `"altcha"`); only change it if you've set a custom `name` attribute on the widget.

## Enabling debug output

The plain `debug` HTML attribute **does nothing** on this widget (it isn't in the custom element's observed-attributes list; silently ignored, same failure class as `challengeurl`). Debug must go through the JSON `configuration` attribute:

```blade
<altcha-widget challenge="/altcha-challenge" configuration='{"debug":true}'></altcha-widget>
```

With this on, the browser console logs every step (`ALTCHA [name=altcha] fetching challenge from GET <url>`, `challenge {...}`, `solution {...}`, `verified`/`verification failed` with the real JS error and stack). **Remove it before shipping** — it's a diagnostic aid, not a production setting.

## Troubleshooting checklist

Work top to bottom; each one produces a distinct, somewhat-misleading symptom.

1. **Widget renders nothing at all, no console error.**
   The `altcha` JS bundle isn't actually loaded on the page. Check `@vite(...)` includes the JS entrypoint, check the import is in a file that's actually bundled, check the dev server (`npm run dev`) is running or `npm run build` was re-run after adding the import.

2. **Widget shows a red "Verification failed" immediately.**
   Enable `configuration='{"debug":true}'` and read the actual console error before guessing further — this single step replaces most of the rest of this list. Specifically check for `ALTCHA [name=altcha] fetching challenge from GET ` with **nothing after "GET "** — that's the `challengeurl` vs `challenge` attribute bug (see above); the widget is fetching the current page, not the challenge endpoint.

3. **500 on `GET /altcha-challenge`, logged as `AltchaOrg\Altcha\Altcha::__construct(): Argument #1 ($hmacKey) must be of type string, null given`.**
   `ALTCHA_HMAC_KEY` isn't set — check for a malformed `.env` line (no `=`) or a stale config cache (`php artisan config:clear` if you've run `config:cache` since editing `.env`).

4. **Everything above checks out, curl against `/altcha-challenge` returns valid JSON, but the real browser still fails.**
   Don't trust Network-tab misclicks: filtering by "altcha" also matches the `altcha.js` *script* resource, not just the XHR — filter by the **Fetch/XHR** type specifically, and confirm the row's `Type` column before reading its response. A `curl` reproduction with the exact cookies from the failing browser request is the fastest way to confirm whether the server or the client is at fault.

5. **Ad blockers / Brave Shields.**
   Worth a quick elimination pass (test in a private window with extensions off), but in practice this is rare for a **same-origin** challenge endpoint and was a red herring more than once while chasing #2 above — don't spend long here before checking `debug` output.

6. **Rate limiting (`throttle:10,1` on the challenge route by default).**
   Heavy manual testing (reloads, multiple browsers) can exhaust it. `php artisan cache:clear` resets it. Symptom is the same generic HTML-instead-of-JSON error as #2, so again: check `debug` output first rather than assuming this is the cause.
