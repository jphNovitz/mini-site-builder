@extends('layouts.base')
@section('title', 'Créer ma carte de visite')
@section('description', 'Donnez une adresse web à votre activité, gratuitement : formulaire de 2 minutes, carte en ligne avec QR code après validation.')
@section('image', asset('images/og-carte-de-visite.png'))
@section('content')
    @include('business-card.hero')

    {{-- ───────── formulaire ───────── --}}
    <div id="formulaire" class="scroll-mt-6 py-12">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
            <h2 class="text-xl font-bold text-slate-900">Créer ma carte</h2>
            <p class="mt-1 text-sm text-slate-600">Entreprise, contact, réseaux sociaux, logo, couleur.</p>
            <x-form.input :socialNetworks="$socialNetworks" submit_label="Créer ma carte"/>
        </div>

    </div>

@endsection
