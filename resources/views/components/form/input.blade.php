<form method="POST" action="/creer-ma-carte" enctype="multipart/form-data">
    @csrf

    <article class="flex flex-col gap-4 p-4 bg-white rounded-lg shadow-md">
        <h3 class="w-full text-lg font-semibold">Entreprise</h3>
        <div class="flex flex-col gap-4 my-2">
            <label for="company_name" class="w-full">Nom de l'entreprise</label>
            <input type="text" id="company_name" name="company_name" value="{{old('company_name')}}"
                   placeholder="Indiquez le nom de votre entreprise" autocomplete="organization"
                   class="w-full p-2 border border-gray-200" required>
            @error('company_name')
            <span class="text-red-600 font-semibold"> {{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-4 my-2">
            <label for="tagline" class="w-full">Phrase à propos</label>
            <input type="text" id="tagline" name="tagline" value="{{old('tagline')}}"
                   placeholder="Une phrase courte qui décrit votre entreprise"
                   class="w-full p-2 border border-gray-200">
            @error('tagline')
            <span class="text-red-600 font-semibold"> {{$message}}</span>
            @enderror
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="flex flex-col gap-4 my-2">
                <label for="vat_number" class="w-full">N° de TVA</label>
                <input type="text" id="vat_number" name="vat_number" value="{{old('vat_number')}}"
                       placeholder="Numéro de TVA"
                       class="w-full p-2 border border-gray-200">
                @error('vat_number')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="company_number" class="w-full">N° d'entreprise</label>
                <input type="text" id="company_number" name="company_number" value="{{old('company_number')}}"
                       placeholder="Numéro d'entreprise" class="w-full p-2 border border-gray-200">
                @error('company_number')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <h3 class="w-full text-lg font-semibold">Contact</h3>
        <div class="flex flex-col gap-4 my-2">
            <label for="address" class="w-full">Adresse</label>
            <input type="text" id="address" name="address" value="{{old('address')}}" placeholder="Votre adresse"
                   autocomplete="street-address" class="w-full p-2 border border-gray-200">
            @error('address')
            <span class="text-red-600 font-semibold"> {{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-4 my-2 ">
            <label for="website" class="w-full">Site internet</label>
            <input type="url" id="website" name="website" value="{{old('website')}}" placeholder="Votre site internet"
                   autocomplete="url" class="w-full p-2 border border-gray-200">
            @error('website')
            <span class="text-red-600 font-semibold"> {{$message}}</span>
            @enderror
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="flex flex-col gap-4 my-2">
                <label for="phone_number" class="w-full">Téléphone</label>
                <input type="tel" id="phone_number" name="phone_number" value="{{old('phone_number')}}"
                       placeholder="Téléphone" autocomplete="tel"
                       class="w-full p-2 border border-gray-200">
                @error('phone_number')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="email" class="w-full">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email"
                       autocomplete="email" class="w-full p-2 border border-gray-200">
                @error('email')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <h3 class="w-full text-lg font-semibold">Apparence</h3>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

            <div class="flex flex-col gap-4 my-2">
                <label for="accent_color" class="w-full">Couleur</label>
                <input type="color" id="accent_color" name="accent_color"
                       value="{{ old('accent_color', \App\Models\BusinessCard::DEFAULT_ACCENT) }}"
                       class=" border border-gray-200">
                @error('accent_color')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-4 my-2">
                <label for="logo" class="w-full">Logo</label>
                <input type="file" id="logo" name="logo" placeholder="Votre logo" accept="image/*"
                       class="w-full p-2 border border-gray-200">
                <p class="mt-1 text-xs text-slate-500">JPEG, PNG ou WebP — 2 Mo maximum</p>
                @error('logo')
                <span class="text-red-600 font-semibold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <h3 class="w-full text-lg font-semibold">Réseaux sociaux</h3>
        @foreach ($socialNetworks as $network)
            <div class="flex flex-col gap-4 my-2">
                <label for="social_media_links_{{ $network->value }}" class="full"> {{ $network->label() }} </label>
                <input
                    type="url"
                    id="social_media_links_{{ $network->value }}"
                    name="social_media_links[{{ $network->value }}]"
                    value="{{ old('social_media_links.' . $network->value) }}"
                    placeholder="{{ $network->url() }}"
                    class="w-full p-2 border border-gray-200"
                >
            </div>
        @endforeach
        <input type="submit" value="{{$submit_label ?? 'Créer ma carte'}}"
               class="w-auto bg-brand-dark text-brand-soft py-2 px-4 rounded-md hover:bg-brand w-fit">
        <p>Les infos seront publiées sur la carte</p>
    </article>
</form>
