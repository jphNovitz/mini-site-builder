@extends('admin.layouts.base')
@section('content')

    @if($businessCard->status === \App\Enums\CardStatus::Published)
        <div class="bg-blue-50 text-blue-800 p-3 rounded-md mb-4">
            Cette carte est déjà en ligne. Enregistrer republiera immédiatement vos changements.
        </div>
    @endif

    <x-form.input :businessCard="$businessCard" :action="route('admin.cards.update', $businessCard)" submit_label="Modifier la carte"/>
@endsection
