@php
    $accent = preg_match('/^#[0-9a-fA-F]{6}$/', $businessCard->accent_color ?? '') ? $businessCard->accent_color : \App\Models\BusinessCard::DEFAULT_ACCENT;
    [$r, $g, $b] = sscanf($accent, '#%02x%02x%02x');
    $onAccent = (0.299 * $r + 0.587 * $g + 0.114 * $b) > 160 ? '#111827' : '#ffffff';
    $socials = array_filter($businessCard->social_media_links ?? []);
@endphp
    <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $businessCard->company_name }}</title>
    <style>
        :root {
            --accent: {{ $accent }};
            --on-accent: {{ $onAccent }};
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f3f4f6;
            color: #111827;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            line-height: 1.5;
        }

        main {
            max-width: 28rem;
            margin: 0 auto;
            padding: 1.5rem 1rem;
        }

        .card {
            background: #fff;
            border-radius: 1rem;
            border-top: 6px solid var(--accent);
            box-shadow: 0 1px 3px rgba(0, 0, 0, .12);
            padding: 2rem 1.5rem;
            text-align: center;
        }

        .logo {
            width: 6rem;
            height: 6rem;
            object-fit: contain;
            margin-bottom: 1rem;
        }

        h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .tagline {
            margin: .25rem 0 0;
            color: #4b5563;
        }

        .contacts {
            list-style: none;
            margin: 1.5rem 0;
            padding: 0;
        }

        .contacts li {
            margin: .5rem 0;
        }

        a {
            color: var(--accent);
            overflow-wrap: anywhere;
        }

        .socials {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .socials a {
            display: inline-flex;
            padding: .625rem;
            border-radius: 50%;
            background: var(--accent);
            color: var(--on-accent);
        }

        .btn {
            display: inline-block;
            padding: .75rem 1.5rem;
            border-radius: .5rem;
            background: var(--accent);
            color: var(--on-accent);
            font-weight: 600;
            text-decoration: none;
        }

        .legal {
            margin-top: 1.5rem;
            font-size: .75rem;
            color: #6b7280;
        }
    </style>
</head>
<body>
<main>
    <article class="card">
        @if ($logo)
            <img class="logo" src="{{ $logo }}" alt="Logo {{ $businessCard->company_name }}">
        @endif

        <h1>{{ $businessCard->company_name }}</h1>
        @if ($businessCard->tagline)
            <p class="tagline">{{ $businessCard->tagline }}</p>
        @endif

        <ul class="contacts">
            @if ($businessCard->phone_number)
                <li>
                    <a href="tel:{{ preg_replace('/[^+\d]/', '', $businessCard->phone_number) }}">{{ $businessCard->phone_number }}</a>
                </li>
            @endif
            @if ($businessCard->email)
                <li><a href="mailto:{{ $businessCard->email }}">{{ $businessCard->email }}</a></li>
            @endif
            @if ($businessCard->website)
                <li><a href="{{ $businessCard->website }}" rel="noopener noreferrer">{{ $businessCard->website }}</a>
                </li>
            @endif
            @if ($businessCard->address)
                <li>{{ $businessCard->address }}</li>
            @endif
        </ul>

        @if ($socials)
            <div class="socials">
                @foreach ($socials as $platform => $url)
                    @if ($network = \App\Enums\SocialMedia::tryFrom($platform))
                        <a href="{{ $url }}" aria-label="{{ $network->label() }}" target="_blank"
                           rel="noopener noreferrer">@include('templates.icons.'.$network->value)</a>
                    @endif
                @endforeach
            </div>
        @endif

        <a class="btn" href="contact.vcf" download>Ajouter à mes contacts</a>

        @if ($businessCard->vat_number || $businessCard->company_number)
            <p class="legal">
                @if ($businessCard->vat_number)
                    TVA : {{ $businessCard->vat_number }}
                @endif
                @if ($businessCard->vat_number && $businessCard->company_number)
                    ·
                @endif
                @if ($businessCard->company_number)
                    N° d'entreprise : {{ $businessCard->company_number }}
                @endif
            </p>
        @endif
    </article>
</main>
</body>
</html>
