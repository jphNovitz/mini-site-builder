<?php

namespace App\Services;

use App\Actions\Emails\SendPublishNotificationUserAction;
use App\Actions\Zip\ZipAction;
use App\Contracts\SendApprovalNotificationEmailContract;
use App\Models\BusinessCard;

class SendApprovalNotificationEmailService implements SendApprovalNotificationEmailContract
{
    public function __construct(private readonly SendPublishNotificationUserAction $notificationUserAction,
                                private ZipAction                                  $zipAction,
    )
    {
    }

    public function send(BusinessCard $businessCard)
    {
        $zip = $this->zipAction->execute($businessCard->slug);
        $this->notificationUserAction->execute($businessCard, $zip);
    }
}
