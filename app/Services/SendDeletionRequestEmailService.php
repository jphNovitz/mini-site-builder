<?php

namespace App\Services;

use App\Contracts\SendDeletionRequestEmailContract;
use App\Mail\DeletionRequestEmail;
use App\Models\BusinessCard;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class SendDeletionRequestEmailService implements SendDeletionRequestEmailContract
{

    public function send(BusinessCard $businessCard)
    {

        $url = URL::temporarySignedRoute(
            'business-card.delete',
            now()->addMinutes(30),
            ['businessCard' => $businessCard->slug]
        );

        Mail::to($businessCard->email)->send(new DeletionRequestEmail($businessCard, $url));

    }
}
