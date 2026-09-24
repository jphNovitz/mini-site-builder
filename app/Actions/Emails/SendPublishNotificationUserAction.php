<?php

namespace App\Actions\Emails;

use App\Mail\PublishNotificationUserEmail;
use App\Models\BusinessCard;
use Illuminate\Support\Facades\Mail;

class SendPublishNotificationUserAction
{

    public function execute(BusinessCard $businessCard)
    {
        Mail::to($businessCard->email)->send(new PublishNotificationUserEmail($businessCard));

    }
}
