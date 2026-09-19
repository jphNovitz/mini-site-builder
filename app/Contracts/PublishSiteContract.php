<?php
namespace App\Contracts;
use App\Models\BusinessCard;

interface PublishSiteContract
{
    public function create(BusinessCard $businessCard);

}
