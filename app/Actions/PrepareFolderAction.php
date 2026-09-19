<?php

namespace App\Actions;

use Illuminate\Support\Facades\File;

class PrepareFolderAction
{

    public function execute(string $directory)
    {
        File::ensureDirectoryExists($directory);
        File::cleanDirectory($directory);
    }
}
