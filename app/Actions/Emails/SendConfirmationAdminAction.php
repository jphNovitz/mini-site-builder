<?php

namespace App\Actions\Emails;

use App\Mail\ConfirmationAdminEmail;
use App\Models\BusinessCard;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SendConfirmationAdminAction
{

    public function execute(string $email, BusinessCard $businessCard)
    {
        Mail::to($email)->send(new ConfirmationAdminEmail($businessCard));

    }
}
