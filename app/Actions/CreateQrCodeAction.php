<?php

namespace App\Actions;

use BaconQrCode\Common\ErrorCorrectionLevel;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class CreateQrCodeAction
{

    public function execute(string $vcard)
    {
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $qrCode = $writer->writeString($vcard, 'UTF-8', ErrorCorrectionLevel::M());

        return preg_replace('/^<\?xml[^>]*\?>\s*/', '', $qrCode);

    }

}
