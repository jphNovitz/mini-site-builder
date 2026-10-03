<?php

namespace App\Services;

use App\Contracts\SendDeletionConfirmedEmailContract;
use App\Mail\DeletionConfirmedEmail;
use App\Models\BusinessCard;
use Illuminate\Support\Facades\Mail;

class SendDeletionConfirmedEmailService implements SendDeletionConfirmedEmailContract
{

    public function send(BusinessCard $businessCard)
    {

        Mail::to($businessCard->email)->send(new DeletionConfirmedEmail($businessCard));

    }
}
