@extends('layouts.base')
@section('title', 'Créer ma carte de visite')
@section('description', 'Donnez une adresse web à votre activité, gratuitement : formulaire de 2 minutes, carte en ligne avec QR code après validation.')
@section('image', asset('images/og-carte-de-visite.png'))
@section('content')
    @if(session('success'))
        <div role="status" class="mb-6 flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-6 py-4 text-green-800">
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
            <p class="text-sm font-medium">{{ session('success') }}</p>
        </div>
    @endif

    @include('business-card.hero')

    {{-- ───────── formulaire ───────── --}}
    <div id="formulaire" class="scroll-mt-6 py-12">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
            <h2 class="text-xl font-bold text-slate-900">Créer ma carte</h2>
            <p class="mt-1 text-sm text-slate-600">Entreprise, contact, réseaux sociaux, logo, couleur.</p>
            <x-form.input :socialNetworks="$socialNetworks"  :action="route('business-card.store')" submit_label="Créer ma carte"/>
        </div>

    </div>

@endsection
