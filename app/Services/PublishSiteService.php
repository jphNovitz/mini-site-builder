<?php

namespace App\Services;

use App\Actions\CopyLogoAction;
use App\Actions\CreateHtmlAction;
use App\Actions\CreateVcardAction;
use App\Actions\PrepareFolderAction;
use App\Contracts\PublishSiteContract;
use App\Models\BusinessCard;

class PublishSiteService implements PublishSiteContract
{
    public function __construct(private readonly PrepareFolderAction $prepareFolderAction,
                                private readonly CopyLogoAction      $copyLogoAction,
                                private readonly CreateVcardAction   $createVcardAction,
                                private readonly CreateHtmlAction     $createHtmlAction)
    {}

    public function create(BusinessCard $businessCard)
    {
        $directory = public_path('cartes/'.$businessCard->slug);

        $logo = null;
        $this->prepareFolderAction->execute($directory);
        if ($businessCard->logo_path) {
            $logo = $this->copyLogoAction->execute($businessCard->logo_path, $directory);
        }
        $this->createVcardAction->execute($businessCard, $directory);
        $this->createHtmlAction->execute($businessCard, $logo, $directory);
    }
}
