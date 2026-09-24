<?php
namespace App\Contracts;
use App\Models\BusinessCard;

interface SendApprovalNotificationEmailContract
{
    public function send(BusinessCard $businessCard);

}
