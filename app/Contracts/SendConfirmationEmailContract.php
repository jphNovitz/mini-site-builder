<?php
namespace App\Contracts;
use App\Models\BusinessCard;

interface SendConfirmationEmailContract
{
    public function send(BusinessCard $businessCard);

}
