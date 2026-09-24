@extends('layouts.base')
@section('content')
    @if($success)
        <div class="bg-green-600 text-white p-4">
            {{ $success }}
        </div>
    @endif

    <p>Dès vérification de la carte (pour éviter les bots) votre carte sera publiée.</p>

    <p>Si vous souhaitez aller plus loin dans votre présence web ou tout simplement si vous avez besoin d'aide n'hésitez
        pas à me contacter {{config('app.admin_email')}}</p>
    <p>Jeanphi de <a href="http://jphiweb.be">Jphiweb.be</a></p>
@endsection
