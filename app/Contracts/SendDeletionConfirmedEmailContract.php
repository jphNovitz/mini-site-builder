<?php
namespace App\Contracts;
use App\Models\BusinessCard;

interface SendDeletionConfirmedEmailContract
{
    public function send(BusinessCard $businessCard);

}
