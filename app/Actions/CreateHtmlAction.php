<?php

namespace App\Actions;

use App\Models\BusinessCard;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class CreateHtmlAction
{

    public function execute(BusinessCard $businessCard, ?string $logo, ?string $qrCode, string $directory)
    {
        $content = View::make('templates.site', [
            'businessCard' => $businessCard,
            'logo' => $logo,
            'qrCode' => $qrCode,
        ])->render();

        File::put($directory . '/index.html', $content);

    }
}
