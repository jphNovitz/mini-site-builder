@extends('layouts.base')
@section('content')
    <form method="POST" action="{{route('admin.cards.update', $businessCard)}}" enctype="multipart/form-data">
        @csrf

        <article class="flex flex-col gap-4 p-4 bg-white rounded-lg shadow-md">
            <h1>Créer ma carte</h1>
            <div class="flex flex-col gap-4 my-2">
                <label for="company_name" class="w-full">Nom de l'entreprise</label>
                <input type="text" id="company_name" name="company_name" value="{{$businessCard->company_name}}"
                       placeholder="company.name"
                       class="w-full p-2 border border-gray-200" required>
                @error('company_name')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="tagline" class="w-full">Phrase à propos</label>
                <input type="text" id="tagline" name="tagline" value="{{$businessCard->tagline}}" placeholder="company.tagline"
                       class="w-full p-2 border border-gray-200">
                @error('tagline')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="vat_number" class="w-full">N° de TVA</label>
                <input type="text" id="vat_number" name="vat_number" value="{{$businessCard->vat_number}}"
                       placeholder="company.vat_number"
                       class="w-full p-2 border border-gray-200">
                @error('vat_number')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="company_number" class="w-full">N° d'entreprise</label>
                <input type="text" id="company_number" name="company_number" value="{{$businessCard->company_number}}"
                       placeholder="company.registration_number" class="w-full p-2 border border-gray-200">
                @error('company_number')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="phone_number" class="w-full">Téléphone</label>
                <input type="text" id="phone_number" name="phone_number" value="{{$businessCard->phone_number}}"
                       placeholder="company.phone"
                       class="w-full p-2 border border-gray-200">
                @error('phone_number')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="email" class="w-full">Email</label>
                <input type="text" id="email" name="email" value="{{$businessCard->email}}" placeholder="company.email"
                       class="w-full p-2 border border-gray-200">
                @error('email')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="website" class="w-full">Site internet</label>
                <input type="text" id="website" name="website" value="{{$businessCard->website}}" placeholder="company.website"
                       class="w-full p-2 border border-gray-200">
                @error('website')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="address" class="w-full">Adresse</label>
                <input type="text" id="address" name="address" value="{{$businessCard->address}}" placeholder="company.address"
                       class="w-full p-2 border border-gray-200">
                @error('address')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="accent_color" class="w-full">Couleur</label>
                <input type="text" id="accent_color" name="accent_color" value="{{$businessCard->accent_color}}"
                       placeholder="couleur"
                       class="w-full p-2 border border-gray-200">
                @error('accent_color')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="logo" class="w-full">Logo</label>
                <input type="file" id="logo" name="logo" placeholder="company.logo"
                       class="w-full p-2 border border-gray-200">
                @error('logo')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <h3>Réseaux sociaux</h3>
            @foreach ($socialNetworks as $network)
                <div class="flex flex-col gap-4 my-2">
                    <label for="social_media_links_{{ $network->value }}" class="full"> {{ $network->label() }} </label>
                    <input
                        type="url"
                        id="social_media_links_{{ $network->value }}"
                        name="social_media_links[{{ $network->value }}]"
                        value="{{ $businessCard->social_media_links[$network->value] ?? '' }}"
                        placeholder="{{ $network->url() }}"
                        class="w-full p-2 border border-gray-200"
                    >
                </div>
            @endforeach
            <input type="submit" value="Créer ma carte"
                   class="w-auto bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
        </article>
    </form>
@endsection
