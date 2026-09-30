<?php

namespace App\Actions\Emails;

use App\Mail\PublishNotificationUserEmail;
use App\Models\BusinessCard;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SendPublishNotificationUserAction
{

    public function execute(BusinessCard $businessCard, array $file)
    {
        Mail::to($businessCard->email)->send(new PublishNotificationUserEmail($businessCard, $file));
        Storage::disk('local')->delete('temp/'.$file['name']);

    }
}
