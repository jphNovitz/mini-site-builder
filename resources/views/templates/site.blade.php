@php
    $accent = preg_match('/^#[0-9a-fA-F]{6}$/', $businessCard->accent_color ?? '') ? $businessCard->accent_color : \App\Models\BusinessCard::DEFAULT_ACCENT;
    [$r, $g, $b] = sscanf($accent, '#%02x%02x%02x');
    $isLight = (0.299 * $r + 0.587 * $g + 0.114 * $b) > 160;
    $onAccent = $isLight ? '#111827' : '#ffffff';
    // Couleur d'accent utilisée comme texte/icône sur fond clair : si l'accent est trop clair, on retombe sur l'encre.
    $accentInk = $isLight ? '#111827' : $accent;
    $accentTint = "rgba($r, $g, $b, .09)";

    $socials = array_filter($businessCard->social_media_links ?? []);
    $fullName = trim(($businessCard->first_name ?? '').' '.($businessCard->last_name ?? ''));
    $heading = $fullName !== '' ? $fullName : $businessCard->company_name;
    $initials = collect(preg_split('/\s+/', trim($heading)))->filter()->take(2)
        ->map(fn ($w) => mb_strtoupper(mb_substr($w, 0, 1)))->implode('');
    $websiteLabel = $businessCard->website ? rtrim(preg_replace('#^https?://#i', '', $businessCard->website), '/') : null;
    $hasContacts = $businessCard->phone_number || $businessCard->email || $businessCard->website || $businessCard->address;
@endphp
    <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="{{ $accent }}">
    <title>{{ $fullName !== '' ? $fullName.' — '.$businessCard->company_name : $businessCard->company_name }}</title>
    <style>
        @font-face {
            font-family: "Instrument Sans";
            src: url("/fonts/instrument-sans-variable.woff2") format("woff2");
            font-weight: 400 600;
            font-display: swap;
        }

        @font-face {
            font-family: "Instrument Serif";
            src: url("/fonts/instrument-serif-400.woff2") format("woff2");
            font-weight: 400;
            font-display: swap;
        }

        :root {
            --accent: {{ $accent }};
            --on-accent: {{ $onAccent }};
            --accent-ink: {{ $accentInk }};
            --accent-tint: {{ $accentTint }};
            /* Texture à points du bandeau : points blancs sur accent foncé, points sombres sur accent clair */
            --dots: {{ $isLight ? 'rgba(17, 24, 39, .14)' : 'rgba(255, 255, 255, .18)' }};
            --ink: #111827;
            --muted: #4b5563;
            --subtle: #6b7280;
            --line: #eef0f3;
            --ground: #f4f5f8;
            --radius: 20px;
        }

        *, *::before, *::after { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--ground);
            color: var(--ink);
            font-family: "Instrument Sans", system-ui, -apple-system, "Segoe UI", sans-serif;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        a { color: inherit; text-decoration: none; }

        .cover {
            height: 160px;
            background-color: var(--accent);
            background-image: radial-gradient(var(--dots) 1px, transparent 1.4px);
            background-size: 14px 14px;
        }

        main {
            max-width: 28rem;
            margin: -56px auto 0;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        /* Identité */
        .identity {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 10px;
            padding-bottom: 8px;
        }

        .logo {
            width: 104px;
            height: 104px;
            border-radius: 28px;
            background: #fff;
            border: 5px solid var(--ground);
            box-shadow: 0 10px 30px rgba(17, 24, 39, .10);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo img { width: 100%; height: 100%; object-fit: contain; padding: 10px; }

        .logo .initials {
            font-family: "Instrument Serif", Georgia, serif;
            font-size: 40px;
            line-height: 1;
            color: var(--accent-ink);
        }

        .company {
            margin: 6px 0 0;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--accent-ink);
        }

        h1 {
            margin: 0;
            font-family: "Instrument Serif", Georgia, serif;
            font-weight: 400;
            font-size: 44px;
            line-height: 1.02;
            letter-spacing: -.01em;
        }

        .tagline {
            margin: 4px 0 0;
            max-width: 310px;
            font-size: 15px;
            line-height: 1.55;
            color: var(--muted);
        }

        /* Cartes */
        .panel {
            background: #fff;
            border-radius: var(--radius);
            box-shadow: 0 1px 2px rgba(17, 24, 39, .05);
        }

        .panel-title {
            margin: 0;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--subtle);
        }

        /* Coordonnées */
        .contacts { list-style: none; margin: 0; padding: 8px 18px; }
        .contacts li + li { border-top: 1px solid var(--line); }

        .contact {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 0;
        }

        .contact-icon {
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            border-radius: 12px;
            background: var(--accent-tint);
            color: var(--accent-ink);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-text { display: flex; flex-direction: column; gap: 2px; min-width: 0; }
        .contact-label { font-size: 12px; color: var(--subtle); }
        .contact-value { font-size: 15px; font-weight: 500; line-height: 1.4; overflow-wrap: anywhere; }
        a.contact:hover .contact-value { color: var(--accent-ink); }

        /* Réseaux sociaux */
        .socials { padding: 18px; display: flex; flex-direction: column; gap: 14px; }

        .socials-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
        }

        .social {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            padding: 10px 0;
            border-radius: 14px;
            background: #f7f8fa;
            transition: background-color .15s, color .15s;
        }

        .social:hover { background: var(--accent-tint); color: var(--accent-ink); }
        .social svg { width: 22px; height: 22px; display: block; }
        .social span { font-size: 11px; color: var(--muted); }

        /* Infos légales */
        .legal { padding: 18px; display: flex; flex-direction: column; gap: 12px; }
        .legal dl { margin: 0; }

        .legal-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            gap: 12px;
            padding: 12px 0;
        }

        .legal-row + .legal-row { border-top: 1px solid var(--line); }
        .legal-row:first-child { padding-top: 0; }
        .legal-row:last-child { padding-bottom: 0; }
        .legal dt { font-size: 14px; color: var(--muted); }
        .legal dd { margin: 0; font-size: 14px; font-weight: 600; font-variant-numeric: tabular-nums; }

        /* Boutons */
        .actions { display: flex; flex-direction: column; gap: 10px; padding-top: 4px; }

        .btn {
            height: 56px;
            border-radius: 16px;
            font: inherit;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            cursor: pointer;
            transition: transform .1s, box-shadow .15s;
        }

        .btn:active { transform: scale(.98); }

        .btn-primary {
            border: 0;
            background: var(--accent);
            color: var(--on-accent);
            box-shadow: 0 8px 20px rgba(17, 24, 39, .14);
        }

        .btn-secondary {
            border: 1.5px solid #d9dce3;
            background: #fff;
            color: var(--ink);
        }

        .btn-secondary:hover { border-color: var(--accent); }

        :focus-visible { outline: 3px solid var(--accent); outline-offset: 3px; }

        /* Footer */
        footer {
            padding: 28px 20px 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            text-align: center;
        }

        footer .rule { width: 32px; height: 2px; border-radius: 2px; background: var(--accent); opacity: .5; }
        footer p { margin: 0; font-size: 12px; color: var(--subtle); }
        footer p:first-of-type { margin-top: 6px; }
        footer a { font-weight: 600; color: #374151; }
        footer a:hover { color: var(--ink); }
        footer small { font-size: 11px; }

        /* Panneau QR code */
        .qr-dialog {
            width: 100%;
            max-width: 28rem;
            margin: auto auto 0;
            padding: 14px 24px 36px;
            border: 0;
            border-radius: 28px 28px 0 0;
            background: #fff;
            color: var(--ink);
        }

        .qr-dialog::backdrop { background: rgba(17, 24, 39, .55); }

        .qr-dialog[open] {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
            animation: sheet-up .25s ease-out;
        }

        @keyframes sheet-up { from { transform: translateY(40px); opacity: 0; } }

        @media (min-width: 640px) {
            .qr-dialog { margin: auto; border-radius: 28px; }
        }

        .qr-handle { width: 40px; height: 4px; border-radius: 4px; background: #d9dce3; }
        .qr-header { width: 100%; display: flex; justify-content: space-between; align-items: center; gap: 12px; }
        .qr-header strong { display: block; font-family: "Instrument Serif", Georgia, serif; font-weight: 400; font-size: 28px; line-height: 1.1; }
        .qr-header span { font-size: 13px; color: var(--subtle); }

        .qr-close {
            width: 44px;
            height: 44px;
            flex-shrink: 0;
            border: 0;
            border-radius: 22px;
            background: #f1f2f5;
            color: var(--ink);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .qr-code { width: 100%; max-width: 260px; padding: 18px; border-radius: 24px; border: 1.5px solid var(--line); }
        .qr-code svg { display: block; width: 100%; height: auto; }
        .qr-link { margin: 0; font-size: 13px; color: var(--muted); text-align: center; overflow-wrap: anywhere; }
        .qr-link strong { color: var(--accent-ink); }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation: none !important; transition: none !important; }
        }
    </style>
</head>
<body>
<div class="cover" aria-hidden="true"></div>

<main>
    {{-- Identité --}}
    <header class="identity">
        <div class="logo">
            @if ($logo)
                <img src="{{ $logo }}" alt="Logo {{ $businessCard->company_name }}">
            @else
                <span class="initials" aria-hidden="true">{{ $initials }}</span>
            @endif
        </div>

        @if ($fullName !== '')
            <p class="company">{{ $businessCard->company_name }}</p>
        @endif
        <h1>{{ $heading }}</h1>

        @if ($businessCard->tagline)
            <p class="tagline">{{ $businessCard->tagline }}</p>
        @endif
    </header>

    {{-- Coordonnées --}}
    @if ($hasContacts)
        <section class="panel" aria-label="Coordonnées">
            <ul class="contacts">
                @if ($businessCard->phone_number)
                    <li>
                        <a class="contact" href="tel:{{ preg_replace('/[^+\d]/', '', $businessCard->phone_number) }}">
                            <span class="contact-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg>
                            </span>
                            <span class="contact-text">
                                <span class="contact-label">Téléphone</span>
                                <span class="contact-value">{{ $businessCard->phone_number }}</span>
                            </span>
                        </a>
                    </li>
                @endif

                @if ($businessCard->email)
                    <li>
                        <a class="contact" href="mailto:{{ $businessCard->email }}">
                            <span class="contact-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg>
                            </span>
                            <span class="contact-text">
                                <span class="contact-label">E-mail</span>
                                <span class="contact-value">{{ $businessCard->email }}</span>
                            </span>
                        </a>
                    </li>
                @endif

                @if ($businessCard->website)
                    <li>
                        <a class="contact" href="{{ $businessCard->website }}" target="_blank" rel="noopener noreferrer">
                            <span class="contact-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                            </span>
                            <span class="contact-text">
                                <span class="contact-label">Site internet</span>
                                <span class="contact-value">{{ $websiteLabel }}</span>
                            </span>
                        </a>
                    </li>
                @endif

                @if ($businessCard->address)
                    <li>
                        <a class="contact" href="https://www.google.com/maps/search/?api=1&query={{ urlencode($businessCard->address) }}" target="_blank" rel="noopener noreferrer">
                            <span class="contact-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </span>
                            <span class="contact-text">
                                <span class="contact-label">Adresse</span>
                                <span class="contact-value">{!! nl2br(e($businessCard->address)) !!}</span>
                            </span>
                        </a>
                    </li>
                @endif
            </ul>
        </section>
    @endif

    {{-- Réseaux sociaux --}}
    @if ($socials)
        <section class="panel socials" aria-labelledby="socials-title">
            <h2 class="panel-title" id="socials-title">Réseaux sociaux</h2>
            <div class="socials-grid">
                @foreach ($socials as $platform => $url)
                    @if ($network = \App\Enums\SocialMedia::tryFrom($platform))
                        <a class="social" href="{{ $url }}" target="_blank" rel="noopener noreferrer">
                            @include('templates.icons.'.$network->value)
                            <span>{{ $network->label() }}</span>
                        </a>
                    @endif
                @endforeach
            </div>
        </section>
    @endif

    {{-- Informations légales --}}
    @if ($businessCard->company_number || $businessCard->vat_number)
        <section class="panel legal" aria-labelledby="legal-title">
            <h2 class="panel-title" id="legal-title">Informations légales</h2>
            <dl>
                @if ($businessCard->company_number)
                    <div class="legal-row">
                        <dt>N° d'entreprise</dt>
                        <dd>{{ $businessCard->company_number }}</dd>
                    </div>
                @endif
                @if ($businessCard->vat_number)
                    <div class="legal-row">
                        <dt>N° de TVA</dt>
                        <dd>{{ $businessCard->vat_number }}</dd>
                    </div>
                @endif
            </dl>
        </section>
    @endif

    {{-- Actions --}}
    <div class="actions">
        <a class="btn btn-primary" href="contact.vcf" download>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M19 8v6"/><path d="M22 11h-6"/></svg>
            Ajouter à mes contacts
        </a>

        @if ($qrCode)
            <button type="button" class="btn btn-secondary" data-qr-open aria-haspopup="dialog" aria-controls="qr-dialog">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><path d="M14 14h3v3h-3z"/><path d="M20 14v.01"/><path d="M14 20h.01"/><path d="M17 20h4v-3"/></svg>
                Afficher le QR code
            </button>
        @endif
    </div>
</main>

<footer>
    <div class="rule" aria-hidden="true"></div>
    <p>Carte de visite numérique réalisée par <a href="https://jphiweb.be" target="_blank" rel="noopener">jphiweb.be</a></p>
    <p><small>© {{ date('Y') }} {{ $businessCard->company_name }}</small></p>
</footer>

@if ($qrCode)
    <dialog class="qr-dialog" id="qr-dialog" aria-labelledby="qr-title">
        <div class="qr-handle" aria-hidden="true"></div>
        <div class="qr-header">
            <div>
                <strong id="qr-title">{{ $heading }}</strong>
                <span>Scannez pour enregistrer le contact</span>
            </div>
            <button type="button" class="qr-close" data-qr-close aria-label="Fermer">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>
        <div class="qr-code" role="img" aria-label="QR code pour ajouter {{ $heading }} à vos contacts">
            {!! $qrCode !!}
        </div>
        <p class="qr-link">Ou partagez le lien : <strong>{{ preg_replace('#^https?://#i', '', url()->current()) }}</strong></p>
    </dialog>

    <script>
        (() => {
            const dialog = document.getElementById('qr-dialog');
            document.querySelector('[data-qr-open]').addEventListener('click', () => dialog.showModal());
            dialog.querySelector('[data-qr-close]').addEventListener('click', () => dialog.close());
            // Fermeture au clic sur le fond
            dialog.addEventListener('click', (e) => {
                const r = dialog.getBoundingClientRect();
                const outside = e.clientX < r.left || e.clientX > r.right || e.clientY < r.top || e.clientY > r.bottom;
                if (outside) dialog.close();
            });
        })();
    </script>
@endif
</body>
</html>
