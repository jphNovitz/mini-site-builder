<?php

namespace App\Actions\Zip;

use Illuminate\Support\Facades\Storage;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ZipArchive;


class ZipAction
{

    public function execute(string $slug)
    {
        $directory = 'temp';
        $zipFileName = $slug."-" . date("y-m-d-h-i-s") . ".zip";
        $zipFilePath = storage_path("app/private/{$directory}/".$zipFileName);
        // Chemin absolu, pour matcher $file->getRealPath() plus bas (aussi absolu).
        // Avec un chemin relatif ici, strlen($sourcePath) ne correspond plus à rien
        // dans $filePath, et le substr() coupe au mauvais endroit.
        $sourcePath = public_path('cartes/'.$slug);

        Storage::disk('local')->makeDirectory($directory);

        $zip = new ZipArchive();

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($sourcePath));

            foreach ($files as $file) {
                if (!$file->isDir()) {
                    $filePath = $file->getRealPath();
                    $relativePath = substr($filePath, strlen($sourcePath) + 1);
                    $zip->addFile($filePath, $relativePath);
                }
            }
            $zip->close();
        } else {
            return response()->json(['error' => 'Failed to create ZIP archive'], 500);
        }

        return ['path' =>$zipFilePath, 'name' => $zipFileName];
    }
}
