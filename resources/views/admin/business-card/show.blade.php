@extends('admin.layouts.base')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Détails de la carte de visite</h3>
        </div>
        <div class="card-body">
            <p><strong>Nom de l'entreprise:</strong> {{ $businessCard->company_name }}</p>
            <p><strong>Numéro de TVA:</strong> {{ $businessCard->vat_number }}</p>
            <p><strong>Téléphone:</strong> {{ $businessCard->phone_number }}</p>
            <p><strong>Status:</strong> {{ $businessCard->status }}</p>
            <p><strong>Logo:</strong></p>
            <img src="{{ Storage::url($businessCard->logo_path) }}" alt="Logo de l'entreprise" style="max-width: 200px;">
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.cards.index') }}" class="btn btn-secondary">Retour à la liste</a>
            <a href="{{ route('admin.cards.edit', $businessCard) }}" class="btn btn-secondary">Modifier</a>
            <form action="{{ route('admin.cards.approve', $businessCard) }}" method="POST">
                @csrf
                <input type="submit" value="Valider pour build" class="btn btn-secondary">
            </form>
        </div>
    </div>
@endsection

