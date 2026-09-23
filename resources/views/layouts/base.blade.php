<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description', 'Créez gratuitement votre carte de visite numérique : coordonnées, réseaux sociaux et QR code, prête à partager en un lien.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:title" content="@yield('title', 'Accueil')">
    <meta property="og:description" content="@yield('description', 'Créez gratuitement votre carte de visite numérique : coordonnées, réseaux sociaux et QR code, prête à partager en un lien.')">
    <meta property="og:image" content="@yield('image', asset('images/og-carte-de-visite.png'))">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Accueil')">
    <meta name="twitter:description" content="@yield('description', 'Créez gratuitement votre carte de visite numérique : coordonnées, réseaux sociaux et QR code, prête à partager en un lien.')">
    <meta name="twitter:image" content="@yield('image', asset('images/og-carte-de-visite.png'))">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Accueil')</title>
</head>
<body>


<main class="mx-auto max-w-6xl px-5 py-8 sm:px-6 sm:py-10 lg:px-8 lg:py-14">
    @yield('content')
</main>


<footer
    class="border-t border-slate-200 bg-white"
    style="--brand:#1732AB; --brand-dark:#122885;"
>
    <div class="mx-auto max-w-6xl px-5 py-8 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-start sm:justify-between">

            {{-- Qui propose l'outil : c'est là que se fait le lien vers vos services --}}
            <div class="max-w-sm">
                <p class="text-base font-semibold text-slate-900">jphiweb</p>
                <p class="mt-1.5 text-sm leading-relaxed text-slate-600">
                    Un outil gratuit proposé par jphiweb, création de sites web pour les indépendants et
                    les PME en Brabant wallon.
                    <a
                        href="https://jphiweb.be"
                        class="font-medium text-[var(--brand)] underline underline-offset-2 hover:text-[var(--brand-dark)] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[var(--brand)]"
                    >Voir mes services</a>
                </p>
            </div>

            {{-- Liens utiles --}}
            <nav aria-label="Liens de bas de page">
                <ul class="flex flex-col gap-2 text-sm sm:items-end">
                    <li>
                        <a href="{{ url('/mentions-legales') }}"
                           class="text-slate-600 underline-offset-2 hover:text-[var(--brand)] hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[var(--brand)]">
                            Mentions légales
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/vie-privee') }}"
                           class="text-slate-600 underline-offset-2 hover:text-[var(--brand)] hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[var(--brand)]">
                            Vie privée et données
                        </a>
                    </li>
                    <li>
                        <a href="mailto:bonjour@jphiweb.be"
                           class="text-slate-600 underline-offset-2 hover:text-[var(--brand)] hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[var(--brand)]">
                            Une question ? bonjour@jphiweb.be
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <p class="mt-8 border-t border-slate-100 pt-5 text-sm text-slate-500">
            © {{ date('Y') }} jphiweb. Les cartes sont publiées après validation manuelle.
        </p>
    </div>
</footer>
</body>
</html>
