@extends('layouts.base')
@section('content')
    <div class="mx-auto max-w-3xl min-h-screen">
        <h1 class="text-2xl font-bold text-slate-900">Confirmer la suppression</h1>
        <p class="mt-4">Supprimer définitivement la carte « {{ $businessCard->company_name }} » ? Cette action est irréversible.</p>

        <form method="POST" action="{{ $destroyUrl }}" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-700 text-red-50 py-2 px-4 rounded-md">
                Supprimer définitivement
            </button>
        </form>
    </div>
@endsection
