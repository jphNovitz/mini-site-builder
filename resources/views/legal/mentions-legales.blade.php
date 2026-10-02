@extends('layouts.base')
@section('title', 'Mentions légales')
@section('description', 'Mentions légales du site.')
@section('content')
    <div class="mx-auto max-w-3xl">
        <span class="text-sm py-2"><a href="{{route('business-card.create')}}"><< Retour</a></span>
        <h1 class="text-2xl font-bold text-slate-900">Mentions légales</h1>

        <section class="mt-8">
            <h2 class="text-lg font-semibold text-slate-900">Éditeur du site</h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le présent site est édité par :
            </p>
            <ul>
                <li>Jean-Philippe Novitz</li>
                <li>JPHIWEB</li>

                <li>E-mail : bonjour@jphiweb.be</li>
                <li>Téléphone : +32 494 22 16 02</li>
            </ul>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB est actuellement utilisé comme nom de projet et de présentation des services proposés par
                Jean-Philippe Novitz.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les éventuelles prestations professionnelles rémunérées sont réalisées dans le cadre administratif et
                contractuel applicable au moment de la mission, notamment via Smart lorsque la prestation est réalisée
                par son intermédiaire.
            </p>
        </section>
        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">Hébergement</h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le site est hébergé par :
            </p>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                OVH SAS <br/>
                2 rue Kellermann<br/>
                59100 Roubaix<br/>
                France<br/><br/>

                RCS Lille Métropole : 424 761 419<br/>
                TVA : FR 22 424 761 419<br/><br/>

                Site internet : ovhcloud.com<br/>
            </p>
        </section>
        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Objet du site
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le site propose notamment un service gratuit de création de cartes de visite numériques.
            </p>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Une personne peut transmettre les informations destinées à apparaître sur sa carte au moyen d'un
                formulaire.
                La carte n'est rendue publiquement accessible qu'après validation par l'administrateur du site.
            </p>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les modalités de fonctionnement du service sont détaillées dans les Conditions d'utilisation.
            </p>
        </section>
        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Propriété intellectuelle
            </h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Sauf mention contraire, les contenus propres au présent site, notamment sa structure, ses textes et ses
                éléments graphiques, ne peuvent être reproduits ou réutilisés sans autorisation préalable lorsque cette
                autorisation est requise par la législation applicable.
            </p>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les utilisateurs restent responsables des informations, logos, images et autres contenus qu'ils
                transmettent
                pour leur carte de visite numérique et déclarent disposer des droits nécessaires à leur utilisation.
            </p>
        </section>
        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Données personnelles
            </h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le site traite certaines données à caractère personnel dans le cadre de la création et de la publication
                des
                cartes de visite numériques.
            </p>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les informations concernant les données collectées, leurs finalités, leur conservation et les droits des
                personnes concernées figurent dans la Politique de confidentialité.
            </p>
        </section>
        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Contact
            </h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Pour toute question concernant le site :
            </p>
            <ul>
                <li>bonjour@jphiweb.be</li>
                <li>+32 494 22 16 02</li>
            </ul>
        </section>
    </div>
@endsection
