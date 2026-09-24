<?php

namespace App\Services;

use App\Actions\Emails\SendPublishNotificationUserAction;
use App\Contracts\SendApprovalNotificationEmailContract;
use App\Models\BusinessCard;

class SendApprovalNotificationEmailService implements SendApprovalNotificationEmailContract
{
    public function __construct(private SendPublishNotificationUserAction $notificationUserAction)
    {
    }

    public function send(BusinessCard $businessCard)
    {
        $this->notificationUserAction->execute($businessCard);
    }
}
