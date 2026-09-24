@extends('admin.layouts.base')
@section('content')
    <div class="grid grid-cols-3 py-8">
        <div><a href="{{route('admin.cards.index')}}" class="underline">Tout afficher</a></div>
        <div><a href="{{route('admin.cards.index',['status' => 'pending'])}}" class="underline">En attente</a></div>
        <div><a href="{{route('admin.cards.index',['status' => 'published'])}}" class="underline">publiées</a></div>
    </div>
    <table class="w-full table-fixed">
        <thead>
        <tr class="border-b border-gray-400">
            <th class="text-left">Modifié</th>
            <th class="text-left">Nom entreprise</th>
            <th class="text-left">Logo</th>
            <th class="text-left">Email</th>
            <th class="text-left">Téléphone</th>
            <th class="text-left">Status</th>

            <th></th>
        </tr>
        </thead>
        <tbody>

        @forelse($businessCards as $businessCard)
            <tr class="border-b border-gray-200">
                <td class="p-2">{{$businessCard->updated_at->format('d/m/Y')}}</td>
                <td class="p-2">{{$businessCard->company_name}}</td>
                <td class="p-2"><img src="{{Storage::url($businessCard->logo_path)}}" alt="alt" class="h-12"></td>
                <td class="p-2 overflow-hidden">{{$businessCard->email}}</td>
                <td class="p-2">{{$businessCard->phone_number}}</td>
                <td class="p-2 w-12 @if($businessCard->status == \App\Enums\CardStatus::Pending) bg-orange-100 text-orange-900 @else bg-green-50 text-green-900 @endif">{{$businessCard->status}}</td>
                <td class="flex space-x-1 p-2">
                    <a href="{{route('admin.cards.show', $businessCard)}}" class="bg-blue-100 text-blue-700 p-2 rounded-md">detail</a>
                    @if($businessCard->status == App\Enums\CardStatus::Pending)
                    <form action="{{route('admin.cards.approve', $businessCard)}}" method="POST">
                        @csrf
                        <input type="submit" value="Approuver" class="bg-blue-700 text-blue-50 p-2 rounded-md">
                    </form>
                    @endif()
                </td>

            </tr>
        @empty
            <tr class="">
                <td>Pas encore de carte</td>
            </tr>
        @endforelse

        </tbody>
    </table>
@endsection
