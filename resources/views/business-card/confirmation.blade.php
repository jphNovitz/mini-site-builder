
@extends('layouts.base')

@section('title', 'Votre carte de visite a été créée')
@section('favicon', asset('icons/favicon-success.svg'))

@section('content')

    <div class="mx-auto max-w-2xl px-4 py-10 sm:py-16">

        <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            <!-- Flash message -->
            @if($success)
                <div role="status" class="flex items-center gap-3 border-b border-green-200 bg-green-50 px-6 py-4 text-green-800 sm:px-10">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 shrink-0"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="2">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 12.75 11.25 15 15 9.75 M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z" />
                    </svg>

                    <p class="text-sm font-medium">
                        {{ $success }}
                    </p>
                </div>
            @endif

            <!-- Contenu principal -->
            <div class="p-6 sm:p-10">

                <h1 class="mb-5 text-2xl font-semibold tracking-tight text-slate-900 sm:text-3xl">
                    Votre carte est en attente de publication
                </h1>

                <p class="mb-6 leading-relaxed text-slate-600">
                    Afin d'éviter les inscriptions automatiques
                    et les publications indésirables, chaque carte
                    fait l'objet d'une validation manuelle
                    avant sa mise en ligne.
                </p>

                <!-- Prochaine étape -->
                <div class="rounded-lg border-l-4 border-green-600 bg-slate-50 p-4">

                    <p class="font-medium text-slate-900">
                        Aucune action nécessaire de votre part.
                    </p>

                    <p class="mt-1 text-sm leading-relaxed text-slate-600">
                        Vous recevrez un email dès que votre carte
                        sera publiée, avec son lien d'accès.
                    </p>

                </div>

            </div>

            <!-- Signature et contact -->
            <div class="border-t border-slate-200 bg-slate-50 p-6 sm:px-10 sm:py-8">

                <h2 class="mb-3 text-lg font-semibold text-slate-900">
                    Besoin d'aller plus loin ?
                </h2>

                <p class="mb-4 text-sm leading-relaxed text-slate-600">
                    Vous souhaitez développer votre présence sur Internet
                    ou avez simplement besoin d'un conseil ?
                    N'hésitez pas à me contacter.
                </p>

                <a href="mailto:bonjour@jphiweb.be"
                   class="text-sm font-medium text-green-700 underline-offset-4 hover:underline">
                    bonjour@jphiweb.be
                </a>

                <p class="mt-5 text-sm text-slate-500">
                    Jeanphi —
                    <a href="https://jphiweb.be"
                       class="font-medium text-green-700 hover:underline">
                        JPHIWEB
                    </a>
                </p>

            </div>

        </section>

    </div>

@endsection
