@extends('layouts.base')
@section('content')
    @if($success)
        <div class="bg-green-600 text-white p-4">
            {{ $success }}
        </div>
    @endif
    <p><a href="{{route('/')}}">Retour à l'accueil</a>/p>
    <h2>Votre carte est en attente de publication</h2>

    <p>Afin d'éviter les inscriptions automatiques et les publications indésirables, chaque carte fait l'objet d'une validation manuelle avant sa mise en ligne.

    <strong>Aucune action n'est nécessaire de votre part</strong>. Vous recevrez un email dès que votre carte sera publiée, avec son lien d'accès.</p>


   <h3 class="mt-16"> Besoin d'aller plus loin ?</h3>

    <p>Vous souhaitez développer votre présence sur Internet ou avez simplement besoin d'un conseil ? N'hésitez pas à me contacter à
        <a href="mailto:bonjour@jphiweb.be">bonjour@jphiweb.be</a>.</p>

    <p>Jeanphi — <a href="https://jphiweb.be">JPHIWEB</a></p>
@endsection
