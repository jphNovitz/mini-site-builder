<div style="font-family: Arial, Helvetica, sans-serif; color: #1e293b; line-height: 1.6;">
    <h1 style="font-size: 20px; margin: 0 0 12px;">Votre carte de visite est en ligne</h1>
    <p style="margin: 0 0 16px;">Vous pouvez la voir à l'adresse
        <a href="{{ url('/cartes/'.$businessCard->slug).'/' }}">{{ url('/cartes/'.$businessCard->slug).'/' }}</a>
    </p>

    <p style="margin: 0 0 4px;"><strong>Détails de la carte :</strong></p>
    <ul style="margin: 0; padding-left: 20px;">
        <li><strong>Entreprise :</strong> {{ $businessCard->company_name }}</li>
        <li><strong>Email :</strong> {{ $businessCard->email }}</li>
        <li><strong>Téléphone :</strong> {{ $businessCard->phone_number }}</li>
        <li><strong>Adresse :</strong> {{ $businessCard->address }}</li>
        <li><strong>Site web :</strong> {{ $businessCard->website }}</li>
    </ul>
</div>
