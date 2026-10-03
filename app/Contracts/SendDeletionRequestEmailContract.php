<?php
namespace App\Contracts;
use App\Models\BusinessCard;

interface SendDeletionRequestEmailContract
{
    public function send(BusinessCard $businessCard);

}
