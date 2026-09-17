@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <p>Cliquer sur le lien ci-dessous pour afficher la liste des cartes de visites</p>
        <p><a href="{{route('admin.cards.index')}}">Liste des cartes</a></p>
    </div>
@endsection
