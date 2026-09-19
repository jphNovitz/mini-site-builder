<?php

namespace App\Actions;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CopyLogoAction
{

    public function execute(string $logoPath, string $directory)
    {
        $sourcePath = Storage::disk('public')->path($logoPath);
        $filename = 'logo.'.File::extension($sourcePath);
        File::copy($sourcePath, $directory.'/'.$filename);

        return $filename;
    }
}
