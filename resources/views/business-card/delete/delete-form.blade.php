@extends('layouts.base')

@section('title', 'Demande de suppression de votre carte de visite')
@section('description', 'Vous souhaitez supprimer votre carte de visite ?  Veuillez remplir le formulaire ci-dessous. Vos informations ainsi que votre logo seront définitivement supprimé.')

@section('content')

    <div class="mx-auto max-w-3xl min-h-screen">
    <span class="text-sm py-2"><a href="{{route('business-card.create')}}"><< Retour</a></span>
    <h1 class="text-2xl font-bold text-slate-900">Suppression de votre carte de visite</h1>

    <section class="mt-8">
        <p>Vous souhaitez supprimer votre carte de visite ?  Veuillez remplir le formulaire ci-dessous.
            <br>Vos informations ainsi que votre logo seront définitivement supprimé.</p>

        <form action="{{ route('business-card.delete.askConfirmation') }}" method="POST" class="mt-4">
            @csrf
            <div class="flex flex-col gap-4 my-2">
                <label for="slug" class="w-full">Url de la carte</label>
                <input type="text" id="slug" name="slug"
                       placeholder="Url"
                       class="w-full p-2 border border-gray-200">
                @error('slug')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="email" class="w-full">Email</label>
                <input type="email" id="email" name="email"
                       placeholder="Email"
                       class="w-full p-2 border border-gray-200">
                @error('email')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>

            <input type="submit" value="Supprimer ma carte de visite"
                   class="w-auto bg-red-700 text-red-50 py-2 px-4 rounded-md hover:bg-brand w-fit">
        </form>
    </section>
@endsection
