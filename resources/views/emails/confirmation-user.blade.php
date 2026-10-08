
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Votre carte de visite a bien été créée</title>
</head>

<body style="margin:0;padding:0;background-color:#f1f5f9;font-family:Arial,Helvetica,sans-serif;color:#1e293b;">

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f1f5f9;">
    <tr>
        <td align="center" style="padding:32px 12px;">

            <table role="presentation" width="600" cellpadding="0" cellspacing="0"
                   style="width:100%;max-width:600px;background-color:#ffffff;border:1px solid #e2e8f0;border-radius:10px;">

                <!-- En-tête -->
                <tr>
                    <td style="padding:28px 32px 22px;border-bottom:1px solid #e2e8f0;">
                        <span style="font-size:20px;font-weight:bold;color:#166534;">
                            JPHIWEB
                        </span>
                        <p style="margin:5px 0 0;font-size:12px;color:#64748b;">
                            Cartes de visite numériques
                        </p>
                    </td>
                </tr>

                <!-- Message principal -->
                <tr>
                    <td style="padding:32px 32px 20px;">

                        <p style="margin:0 0 10px;font-size:12px;font-weight:bold;letter-spacing:1px;color:#15803d;">
                            DEMANDE ENREGISTRÉE
                        </p>

                        <h1 style="margin:0 0 20px;font-size:24px;line-height:1.3;color:#0f172a;">
                            Votre carte de visite a bien été créée
                        </h1>

                        <p style="margin:0 0 16px;font-size:15px;line-height:1.7;">
                            Votre demande a bien été enregistrée.
                            Votre carte de visite numérique est créée,
                            mais elle n'est pas encore accessible en ligne.
                        </p>

                        <p style="margin:0 0 24px;font-size:15px;line-height:1.7;">
                            Afin d'éviter les inscriptions automatiques
                            et les publications indésirables, chaque carte
                            fait l'objet d'une validation manuelle
                            avant sa mise en ligne.
                        </p>

                        <!-- Confirmation -->
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                               style="background-color:#f0fdf4;border-left:3px solid #16a34a;">
                            <tr>
                                <td style="padding:14px 16px;font-size:14px;color:#166534;line-height:1.7;">
                                    <strong>Aucune action n'est nécessaire de votre part.</strong>
                                    <br>
                                    Vous recevrez un nouvel email dès que
                                    votre carte sera publiée, avec son
                                    lien d'accès.
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>

                <!-- Récapitulatif -->
                <tr>
                    <td style="padding:8px 32px 32px;">

                        <h2 style="margin:0 0 14px;font-size:16px;color:#0f172a;">
                            Récapitulatif de votre demande
                        </h2>

                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                               style="border:1px solid #e2e8f0;border-radius:6px;">

                            <tr>
                                <td style="padding:12px;font-size:13px;color:#64748b;width:35%;border-bottom:1px solid #e2e8f0;">
                                    Entreprise
                                </td>
                                <td style="padding:12px;font-size:14px;font-weight:bold;border-bottom:1px solid #e2e8f0;overflow-wrap:anywhere;">
                                    {{ $businessCard->company_name }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:12px;font-size:13px;color:#64748b;border-bottom:1px solid #e2e8f0;">
                                    Email
                                </td>
                                <td style="padding:12px;font-size:14px;border-bottom:1px solid #e2e8f0;overflow-wrap:anywhere;">
                                    {{ $businessCard->email }}
                                </td>
                            </tr>

                            @if($businessCard->phone_number)
                                <tr>
                                    <td style="padding:12px;font-size:13px;color:#64748b;border-bottom:1px solid #e2e8f0;">
                                        Téléphone
                                    </td>
                                    <td style="padding:12px;font-size:14px;border-bottom:1px solid #e2e8f0;">
                                        {{ $businessCard->phone_number }}
                                    </td>
                                </tr>
                            @endif

                            @if($businessCard->address)
                                <tr>
                                    <td style="padding:12px;font-size:13px;color:#64748b;border-bottom:1px solid #e2e8f0;">
                                        Adresse
                                    </td>
                                    <td style="padding:12px;font-size:14px;border-bottom:1px solid #e2e8f0;overflow-wrap:anywhere;">
                                        {{ $businessCard->address }}
                                    </td>
                                </tr>
                            @endif

                            @if($businessCard->website)
                                <tr>
                                    <td style="padding:12px;font-size:13px;color:#64748b;">
                                        Site web
                                    </td>
                                    <td style="padding:12px;font-size:14px;overflow-wrap:anywhere;">
                                        {{ $businessCard->website }}
                                    </td>
                                </tr>
                            @endif

                        </table>

                    </td>
                </tr>

                <!-- Signature JPHIWEB -->
                <tr>
                    <td align="center" style="padding:24px 32px;background-color:#f8fafc;border-top:1px solid #e2e8f0;">

                        <p style="margin:0 0 6px;font-size:12px;color:#64748b;">
                            Un service gratuit proposé par
                        </p>

                        <p style="margin:0 0 6px;font-size:15px;font-weight:bold;">
                            <a href="https://jphiweb.be"
                               style="color:#166534;text-decoration:none;">
                                JPHIWEB
                            </a>
                        </p>

                        <p style="margin:0;font-size:12px;color:#64748b;">
                            <a href="https://jphiweb.be"
                               style="color:#64748b;text-decoration:underline;">
                                www.jphiweb.be
                            </a>
                        </p>

                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>

