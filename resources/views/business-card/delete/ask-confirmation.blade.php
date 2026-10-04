@extends('layouts.base')

@section('title', 'Confirmation de demande de suppression de votre carte de visite')
@section('description', 'Vous souhaitez supprimer votre carte de visite ?  Veuillez remplir le formulaire ci-dessous. Vos informations ainsi que votre logo seront définitivement supprimé.')

@section('content')

    <div class="mx-auto max-w-3xl min-h-screen">
    <span class="text-sm py-2"><a href="{{route('business-card.create')}}"><< Retour</a></span>
    <h1 class="text-2xl font-bold text-slate-900">Suppression de votre carte de visite</h1>

    <section class="mt-8">
        <p>Si une carte avec ce nom et cet email est trouvée, la carte et le logo seront définitivement supprimés</p>

    </section>
@endsection
