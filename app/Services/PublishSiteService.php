<?php

namespace App\Services;

use App\Actions\CopyLogoAction;
use App\Actions\CreateHtmlAction;
use App\Actions\CreateQrCodeAction;
use App\Actions\CreateVcardAction;
use App\Actions\PrepareFolderAction;
use App\Contracts\PublishSiteContract;
use App\Models\BusinessCard;

class PublishSiteService implements PublishSiteContract
{
    public function __construct(private readonly PrepareFolderAction $prepareFolderAction,
                                private readonly CopyLogoAction      $copyLogoAction,
                                private readonly CreateVcardAction   $createVcardAction,
                                private readonly CreateHtmlAction     $createHtmlAction,
                                private readonly CreateQrCodeAction     $createQrCodeAction)
    {}

    public function create(BusinessCard $businessCard)
    {
        $directory = public_path('cartes/'.$businessCard->slug);

        $logo = null;
        $this->prepareFolderAction->execute($directory);
        if ($businessCard->logo_path) {
            $logo = $this->copyLogoAction->execute($businessCard->logo_path, $directory);
        }
        $content = $this->createVcardAction->execute($businessCard, $directory);
        $qrCode = $this->createQrCodeAction->execute($content);


        $this->createHtmlAction->execute($businessCard, $logo, $qrCode, $directory);
    }
}
