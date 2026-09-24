<?php

namespace App\Services;

use App\Actions\Emails\SendConfirmationAdminAction;
use App\Actions\Emails\SendConfirmationUserAction;
use App\Contracts\SendConfirmationEmailContract;
use App\Mail\ConfirmationAdminEmail;
use App\Models\BusinessCard;
use Illuminate\Support\Facades\Mail;

class SendConfirmationEmailService implements SendConfirmationEmailContract
{
    public function __construct(private readonly SendConfirmationAdminAction $sendConfirmationAdminAction,
                                private readonly SendConfirmationUserAction $sendConfirmationUserAction)
    {}

    public function send(BusinessCard $businessCard)
    {
        $this->sendConfirmationAdminAction->execute(config('app.admin_email'), $businessCard);
        $this->sendConfirmationUserAction->execute($businessCard->email, $businessCard);

    }
}
