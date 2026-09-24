@extends('admin.layouts.base')
@section('content')
    <article>
        <h1 class="text-xl font semibold">Détails de la carte de visite</h1>

        <div>@if($businessCard->status == \App\Enums\CardStatus::Pending)
                <span class="bg-orange-100 text-orange-900 p-2 rounded-md">En attente</span>
            @else
                <span class="bg-green-50 text-green-900 p-2 rounded-md">Publiée</span>
            @endif</div>
        <section class="w-full my-4">
            <h2 class="text-lg">Entreprise</h2>
            <div class="w-full grid grid-cols-2 gap-8 py-4">
                <div class="text-right"><strong>Nom de l'entreprise:</strong></div>
                <div> {{ $businessCard->company_name }}</div>
                <div class="text-right"><strong>Phrase d'accroche:</strong></div>
                <div> {{ $businessCard->tagline }}</div>
                <div class="text-right"><strong>Numéro de TVA:</strong></div>
                <div> {{ $businessCard->vat_number }}</div>
                <div class="text-right"><strong>Numéro d'entreprise:</strong></div>
                <div> {{ $businessCard->company_number }}</div>
                <div class="text-right"><strong>Logo:</strong></div>
                <div><img src="{{ Storage::url($businessCard->logo_path) }}" alt="Logo de l'entreprise" class="w-12">
                </div>
                <div class="text-right"><strong>Couleur d'accent:</strong></div>
                <div><span class="block w-12 h-12" style="background-color: {{$businessCard->accent_color}}"></span>
                </div>
            </div>
        </section>
        <section class="w-full my-4">
            <h2 class="text-lg">coordonnées</h2>
            <div class="w-full grid grid-cols-2 gap-8 py-4">
                <div class="text-right"><strong>Adresse:</strong></div>
                <div> {{ $businessCard->address }}</div>
                <div class="text-right"><strong>Email:</strong></div>
                <div> {{ $businessCard->email }}</div>
                <div class="text-right"><strong>Site Web:</strong></div>
                <div> {{ $businessCard->website }}</div>
                <div class="text-right"><strong>Téléphone:</strong></div>
                <div>{{ $businessCard->phone_number }}</div>
            </div>
            <section class="w-full my-4">
                <h2 class="text-lg">Réseaux Sociaux</h2>
                @php($links = array_filter($businessCard->social_media_links ?? []))

                @if ($links)
                    <div class="w-full grid grid-cols-2 gap-8 py-4">
                        @foreach ($links as $platform => $url)
                            @if ($network = \App\Enums\SocialMedia::tryFrom($platform))
                                <div class="inline-flex justify-end space-x-2">
                            <span
                                class="mr-6">{{$network->label()}}</span> @includeIf('templates.icons.'.$network->value)
                                </div>
                                <div>
                                    <a href="{{ $url }}" aria-label="{{ $network->label() }}" target="_blank"
                                       rel="noopener noreferrer">
                                        {{$url}}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @else()
                    <div>Pas de réseaux sociaux</div>
                @endif
                <div class="flex space-x-4 py-8">
                    <a href="{{ route('admin.cards.index') }}" class="bg-brand-soft text-brand p-4 rounded-md">Retour à
                        la
                        liste</a>
                    <a href="{{ route('admin.cards.edit', $businessCard) }}"
                       class="bg-brand text-brand-soft p-4 rounded-md">Modifier</a>
                    @if($businessCard->status == App\Enums\CardStatus::Pending)
                        <form action="{{ route('admin.cards.approve', $businessCard) }}" method="POST">
                            @csrf
                            <input type="submit" value="Valider pour build"
                                   class="bg-green-700 text-green-50 p-4 rounded-md">
                        </form>
                    @else()
                        <a href="{{ url('/cartes/'.$businessCard->slug).'/' }}" target="_blank"
                           class="bg-brand text-brand-soft p-4 rounded-md">Voir la carte</a>
                    @endif()
                </div>
            </section>
        </section>
    </article>
@endsection

