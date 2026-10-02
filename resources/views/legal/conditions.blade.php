@extends('layouts.base')

@section('title', 'Conditions d’utilisation')
@section('description', 'Conditions d’utilisation du service gratuit de création de cartes de visite numériques.')

@section('content')

    <div class="mx-auto max-w-3xl">
        <span class="text-sm py-2"><a href="{{route('business-card.create')}}"><< Retour</a></span>
        <h1 class="text-2xl font-bold text-slate-900">Conditions d’utilisation</h1>

        <section class="mt-8">
            <h2 class="text-lg font-semibold text-slate-900">
                Objet du service
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB propose un service gratuit permettant de demander la création et la publication d’une carte de
                visite numérique accessible sur Internet.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La carte est créée à partir des informations fournies par l’utilisateur au moyen du formulaire prévu à
                cet effet.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                L’envoi du formulaire ne garantit pas la publication immédiate ou automatique de la carte.
                Chaque demande est soumise à une validation préalable par l’administrateur du site.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Gratuité du service
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La création, la validation et la publication d’une carte de visite numérique dans le cadre du présent
                service sont proposées gratuitement.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                L’utilisation du service n’oblige pas l’utilisateur à souscrire à une prestation payante proposée par
                JPHIWEB.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Création d’une carte
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Pour demander la création d’une carte, l’utilisateur doit remplir le formulaire et fournir les
                informations qu’il souhaite voir apparaître sur sa carte de visite numérique.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                L’utilisateur s’engage à fournir des informations exactes et à ne pas usurper l’identité d’une autre
                personne ou utiliser sans autorisation les coordonnées d’un tiers.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                L’utilisateur doit également accepter explicitement la publication sur Internet des informations
                destinées à apparaître sur sa carte.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Validation et publication
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Après l’envoi du formulaire, la demande est placée en attente de validation.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB se réserve le droit de vérifier les informations fournies et de refuser une demande qui ne
                correspond pas à l’objet du service ou qui contient un contenu manifestement illicite, trompeur,
                abusif ou portant atteinte aux droits d’un tiers.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Lorsqu’elle est validée, la carte devient publiquement accessible sur Internet à une adresse de type
                <strong>/cartes/nom-carte</strong>.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La publication d’une carte peut également entraîner son référencement par des moteurs de recherche
                ou son partage par des tiers.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Demandes en attente
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Une demande qui reste en attente de validation pendant plus de 30 jours est automatiquement supprimée,
                ainsi que les données associées à cette demande, sous réserve des informations qui devraient être
                conservées pour répondre à une obligation légale.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Contenus fournis par l’utilisateur
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                L’utilisateur reste responsable des textes, coordonnées, liens, logos, photographies, images et autres
                contenus qu’il transmet pour la création de sa carte.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                En transmettant ces éléments, l’utilisateur déclare disposer des droits et autorisations nécessaires
                permettant leur utilisation et leur publication dans le cadre de sa carte de visite numérique.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Il est notamment interdit de transmettre ou de publier :
            </p>

            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-slate-600">
                <li>des informations volontairement fausses ou trompeuses ;</li>
                <li>des contenus portant atteinte aux droits d’un tiers ;</li>
                <li>des contenus protégés utilisés sans autorisation ;</li>
                <li>des contenus injurieux, diffamatoires, discriminatoires ou menaçants ;</li>
                <li>des contenus manifestement contraires à la législation applicable.</li>
            </ul>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Modification d’une carte
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le titulaire d’une carte peut demander la modification des informations qui y figurent en contactant
                JPHIWEB à l’adresse <strong>bonjour@jphiweb.be</strong>.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB peut demander des informations permettant de vérifier raisonnablement que la demande émane bien
                du titulaire de la carte ou d’une personne autorisée à agir en son nom.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Suppression d’une carte
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le titulaire d’une carte peut demander sa suppression à tout moment en contactant
                <strong>bonjour@jphiweb.be</strong>.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La suppression met fin à la publication de la carte sur le site.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Des copies temporaires peuvent toutefois subsister pendant un certain délai dans les caches techniques
                ou les index de moteurs de recherche, sur lesquels JPHIWEB n’exerce pas de contrôle direct.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Communications liées au service
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                L’utilisateur reçoit des e-mails nécessaires au fonctionnement du service, notamment pour confirmer la
                réception de sa demande et l’informer de la validation, du refus, de la publication ou de la suppression
                de sa carte.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les éventuelles communications commerciales sont distinctes de ces messages et ne sont envoyées que
                lorsque l’utilisateur a accepté séparément de les recevoir.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Disponibilité du service
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB met en œuvre des moyens raisonnables afin d’assurer le fonctionnement et l’accessibilité du
                service.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Une disponibilité permanente et sans interruption ne peut toutefois être garantie.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le service peut notamment être temporairement interrompu pour des raisons de maintenance, de sécurité,
                de mise à jour ou en cas de problème technique indépendant de la volonté de JPHIWEB.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Suspension ou suppression d’une carte
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB peut suspendre ou supprimer une carte lorsqu’il existe un motif raisonnable de considérer
                qu’elle :
            </p>

            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-slate-600">
                <li>contient des informations manifestement illicites ;</li>
                <li>porte atteinte aux droits d’une personne ou d’une organisation ;</li>
                <li>résulte d’une usurpation d’identité ;</li>
                <li>est utilisée de manière abusive ou frauduleuse ;</li>
                <li>ne respecte pas les présentes conditions d’utilisation.</li>
            </ul>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Lorsque les circonstances le permettent, JPHIWEB peut contacter le titulaire de la carte avant ou après
                sa suspension afin de lui permettre de fournir des explications ou de corriger le contenu concerné.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Liens vers des sites tiers
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les cartes peuvent contenir des liens vers des sites internet, réseaux sociaux ou services exploités par
                des tiers.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB n’exerce aucun contrôle sur ces services tiers et n’est pas responsable de leur contenu, de leur
                disponibilité ou de leurs pratiques en matière de protection des données.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Responsabilité
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB est responsable du fonctionnement du service dans les limites prévues par la législation
                applicable.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB ne peut notamment pas être tenu responsable des informations incorrectes fournies par un
                utilisateur, de l’utilisation non autorisée d’un contenu par celui-ci ou des conséquences résultant
                directement de contenus qu’un utilisateur a demandé à publier.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Aucune disposition des présentes conditions n’a pour objet d’exclure ou de limiter une responsabilité
                qui ne pourrait légalement être exclue ou limitée.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Évolution ou arrêt du service
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                JPHIWEB peut faire évoluer les fonctionnalités du service ou modifier ses modalités de fonctionnement.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le service gratuit peut également être interrompu ou arrêté.
                Dans la mesure du raisonnablement possible, les utilisateurs concernés seront informés préalablement
                lorsqu’une telle décision entraîne la suppression définitive de cartes publiées.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Données personnelles
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les modalités de collecte, de traitement, de publication et de conservation des données personnelles
                sont détaillées dans la Politique de confidentialité du site.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Droit applicable
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les présentes conditions d’utilisation sont soumises au droit belge, sous réserve des dispositions
                impératives éventuellement applicables.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Modification des conditions d’utilisation
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les présentes conditions peuvent être modifiées afin de tenir compte de l’évolution du service, de ses
                fonctionnalités ou des obligations légales applicables.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La version publiée sur le site est la version applicable au moment de son utilisation.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Dernière mise à jour : octobre 2026.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Contact
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Pour toute question relative au service ou aux présentes conditions :
            </p>

            <ul class="mt-2 list-none space-y-1 text-sm text-slate-600">
                <li>Jean-Philippe Novitz – JPHIWEB</li>
                <li>E-mail : bonjour@jphiweb.be</li>
                <li>Téléphone : +32 494 22 16 02</li>
            </ul>
        </section>
    </div>

@endsection

