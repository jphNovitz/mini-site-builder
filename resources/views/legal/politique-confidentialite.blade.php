@extends('layouts.base')

@section('title', 'Politique de confidentialité')
@section('description', 'Politique de confidentialité du site et informations relatives au traitement des données personnelles.')

@section('content')

    <div class="mx-auto max-w-3xl">
        <span class="text-sm py-2"><a href="{{route('business-card.create')}}"><< Retour</a></span>
        <h1 class="text-2xl font-bold text-slate-900">Politique de confidentialité</h1>

        <section class="mt-8">
            <h2 class="text-lg font-semibold text-slate-900">
                Responsable du traitement
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les données à caractère personnel collectées via ce site sont traitées par :
            </p>

            <ul>
                <li>Jean-Philippe Novitz</li>
                <li>JPHIWEB</li>
                <li>E-mail : bonjour@jphiweb.be</li>
                <li>Téléphone : +32 494 22 16 02</li>
            </ul>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Pour toute question relative à vos données personnelles ou pour exercer vos droits, vous pouvez utiliser
                les coordonnées indiquées ci-dessus.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Données collectées
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Lors de la création d'une carte de visite numérique, les informations communiquées dans le formulaire
                peuvent notamment comprendre :
            </p>

            <ul>
                <li>votre nom et votre prénom ;</li>
                <li>le nom de votre activité ou de votre entreprise ;</li>
                <li>votre adresse e-mail ;</li>
                <li>votre numéro de téléphone ;</li>
                <li>l'adresse de votre site internet ;</li>
                <li>vos liens vers les réseaux sociaux ;</li>
                <li>votre adresse professionnelle ou votre zone d'activité, lorsque vous choisissez de la communiquer ;</li>
                <li>votre logo, votre photo ou d'autres éléments visuels ;</li>
                <li>les textes et informations que vous souhaitez faire apparaître sur votre carte ;</li>
                <li>les informations relatives à votre consentement à la publication de la carte ;</li>
                <li>le cas échéant, les informations relatives à votre consentement à recevoir des communications commerciales.</li>
            </ul>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Seules les informations nécessaires au fonctionnement du service ou volontairement communiquées par
                l'utilisateur sont collectées.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Création et publication de la carte
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les informations fournies dans le formulaire sont utilisées afin de créer la carte de visite numérique
                demandée.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Après l'envoi du formulaire, la carte est placée en attente de validation. Elle n'est rendue publiquement
                accessible qu'après validation par l'administrateur du site.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Une fois validée, la carte est accessible publiquement sur Internet à une adresse de type
                <strong>/cartes/nom-carte</strong>.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les informations affichées sur une carte publiée peuvent donc être consultées par toute personne
                accédant à cette page et peuvent éventuellement être référencées par des moteurs de recherche.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La publication intervient uniquement après que l'utilisateur a expressément accepté que les informations
                renseignées soient publiées publiquement sur sa carte de visite numérique.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La base juridique de ce traitement est le consentement de la personne concernée.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Gestion de la demande
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les informations transmises sont également utilisées afin de gérer la demande de création de carte,
                notamment pour :
            </p>

            <ul>
                <li>examiner le contenu de la demande ;</li>
                <li>valider ou refuser la carte ;</li>
                <li>gérer son statut ;</li>
                <li>assurer son fonctionnement technique ;</li>
                <li>répondre aux demandes de modification ou de suppression.</li>
            </ul>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Emails liés au fonctionnement du service
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                L'adresse e-mail fournie dans le formulaire est utilisée afin d'informer l'utilisateur des différentes
                étapes concernant sa carte.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Ces messages peuvent notamment concerner :
            </p>

            <ul>
                <li>la réception de la demande ;</li>
                <li>la mise en attente de validation ;</li>
                <li>la validation et la publication de la carte ;</li>
                <li>une modification concernant la carte ;</li>
                <li>sa suppression ou son expiration.</li>
            </ul>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Ces communications sont directement liées au fonctionnement du service et ne constituent pas des
                communications commerciales.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Communications commerciales
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                L'adresse e-mail peut également être utilisée afin de présenter occasionnellement les services proposés
                par JPHIWEB, notamment en matière de création, de gestion ou d'amélioration de sites internet.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Cette utilisation est distincte du fonctionnement de la carte de visite numérique et intervient
                uniquement lorsque la personne a expressément accepté de recevoir ces communications au moyen de la case
                prévue à cet effet dans le formulaire.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le refus de recevoir des communications commerciales n'empêche pas la création ou la publication d'une
                carte.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le consentement peut être retiré à tout moment en contactant
                <strong>bonjour@jphiweb.be</strong> ou en utilisant, lorsqu'il est proposé, le moyen de désinscription
                indiqué dans les communications reçues.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Durée de conservation
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Lorsqu'une demande de carte reste en attente de validation, les données associées à cette demande sont
                supprimées automatiquement après 30 jours.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Lorsqu'une carte est publiée, les informations nécessaires à son fonctionnement sont conservées pendant
                la durée de mise à disposition de cette carte.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Elles sont supprimées lorsque la carte est supprimée, sous réserve des informations qui devraient
                éventuellement être conservées temporairement afin de respecter une obligation légale ou d'assurer la
                défense d'un droit.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les données utilisées pour l'envoi de communications commerciales sont conservées pendant une durée
                maximale de 24 mois à compter du consentement ou de la dernière interaction positive de la personne,
                sauf renouvellement du consentement ou retrait anticipé de celui-ci.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Destinataires des données
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les données sont principalement accessibles à l'administrateur du site.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Certaines données peuvent également être traitées par les prestataires techniques nécessaires au
                fonctionnement du service, notamment l'hébergeur du site et le prestataire utilisé pour l'envoi des
                e-mails.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les informations présentes sur une carte publiée sont, par leur nature, accessibles publiquement sur
                Internet.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Les données personnelles ne sont pas vendues à des tiers.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Hébergement
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le site est hébergé par :
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                OVH SAS<br/>
                2 rue Kellermann<br/>
                59100 Roubaix<br/>
                France
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Vos droits
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Conformément à la réglementation applicable en matière de protection des données, vous disposez,
                selon les circonstances, notamment des droits suivants :
            </p>

            <ul>
                <li>droit d'accès à vos données ;</li>
                <li>droit de rectification ;</li>
                <li>droit à l'effacement ;</li>
                <li>droit à la limitation du traitement ;</li>
                <li>droit d'opposition lorsque celui-ci est applicable ;</li>
                <li>droit à la portabilité lorsque les conditions légales sont réunies ;</li>
                <li>droit de retirer votre consentement à tout moment lorsque le traitement repose sur celui-ci.</li>
            </ul>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Pour exercer ces droits, vous pouvez contacter :
                <strong>bonjour@jphiweb.be</strong>.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Modification ou suppression d'une carte
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Le titulaire d'une carte peut demander à tout moment sa modification ou sa suppression en contactant
                <strong>bonjour@jphiweb.be</strong>.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La suppression d'une carte entraîne la fin de sa publication sur le site.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Un délai peut toutefois être nécessaire avant que cette suppression soit prise en compte par des services
                tiers, notamment les moteurs de recherche, sur lesquels JPHIWEB n'exerce pas de contrôle direct.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Réclamation
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Si vous estimez que le traitement de vos données personnelles ne respecte pas la réglementation
                applicable, vous pouvez introduire une réclamation auprès de :
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Autorité de protection des données<br/>
                Rue de la Presse 35<br/>
                1000 Bruxelles<br/>
                Belgique<br/><br/>

                E-mail : contact@apd-gba.be<br/>
                Téléphone : +32 (0)2 274 48 00
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Modification de la politique de confidentialité
            </h2>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La présente politique de confidentialité peut être modifiée afin de tenir compte d'une évolution du
                service, de ses fonctionnalités ou des obligations légales applicables.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                La version publiée sur le site est la version applicable au moment de sa consultation.
            </p>

            <p class="mt-2 text-sm leading-relaxed text-slate-600">
                Dernière mise à jour : octobre 2026.
            </p>
        </section>
    </div>

@endsection

