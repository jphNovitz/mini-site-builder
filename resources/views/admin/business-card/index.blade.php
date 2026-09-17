@extends('layouts.base')
@section('content')
    <table class="table-auto">
        <thead>
        <tr>
            <th>creation</th>
            <th>modifié</th>
            <th>nom entreprise</th>
            <th>logo</th>
            <th>tva</th>
            <th>Téléphone</th>
            <th>Status</th>

            <th>action</th>
        </tr>
        </thead>
        <tbody>

        @forelse($businessCards as $businessCard)
            <tr>
                <td>{{$businessCard->created_at}}</td>
                <td>{{$businessCard->updated_at}}</td>
                <td>{{$businessCard->company_name}}</td>
                <td><img src="{{Storage::url($businessCard->logo_path)}}" alt="alt"></td>
                <td>{{$businessCard->vat_number}}</td>
                <td>{{$businessCard->phone_number}}</td>
                <td>{{$businessCard->status}}</td>
                <td><a href="{{route('admin.cards.show', $businessCard)}}">detail</a></td>

            </tr>
        @empty
            <tr>
                <td>Pas encore de carte</td>
            </tr>
        @endforelse

        </tbody>
    </table>
@endsection
