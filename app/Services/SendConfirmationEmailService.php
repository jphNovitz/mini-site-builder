<?php

namespace App\Services;

use App\Actions\Emails\SendConfirmationAdminAction;
use App\Actions\Emails\SendConfirmationUserAction;
use App\Contracts\SendConfirmationEmailContract;
use App\Models\BusinessCard;

readonly class SendConfirmationEmailService implements SendConfirmationEmailContract
{
    public function __construct(private SendConfirmationAdminAction $sendConfirmationAdminAction,
                                private SendConfirmationUserAction  $sendConfirmationUserAction)
    {}

    public function send(BusinessCard $businessCard)
    {

        $this->sendConfirmationAdminAction->execute(config('app.admin_email'), $businessCard);
        $this->sendConfirmationUserAction->execute($businessCard->email, $businessCard);

    }
}
