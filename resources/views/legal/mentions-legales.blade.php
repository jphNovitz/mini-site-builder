@extends('layouts.base')
@section('title', 'Mentions légales')
@section('description', 'Mentions légales du site.')
@section('content')
    {{-- Contenu provisoire (lorem ipsum), à remplacer par le texte définitif validé --}}
    <div class="mx-auto max-w-3xl">
        <h1 class="text-2xl font-bold text-slate-900">Mentions légales</h1>

        <section class="mt-8">
            <h2 class="text-lg font-semibold text-slate-900">Éditeur du site</h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nom de l'entreprise, forme
                juridique, adresse du siège, numéro d'entreprise (BCE) et numéro de TVA figureront ici.
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">Contact</h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Adresse email et, le cas échéant, numéro de téléphone de contact.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">Hébergement</h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Nom, adresse et contact de l'hébergeur du site.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">Propriété intellectuelle</h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </section>
    </div>
@endsection
