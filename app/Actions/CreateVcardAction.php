<?php

namespace App\Actions;

use App\Models\BusinessCard;
use Illuminate\Support\Facades\File;

class CreateVcardAction
{

    public function execute(BusinessCard $businessCard, string $directory): string
    {
        $content = $this->buildVCardContent($businessCard);
        File::put($directory.'/contact.vcf', $content);

        return $content;
    }

    private function buildVCardContent(BusinessCard $businessCard): string
    {
        $hasContactName = !empty($businessCard->first_name) || !empty($businessCard->last_name);
        $fullName = trim($businessCard->first_name.' '.$businessCard->last_name);

        $content = "BEGIN:VCARD\n";
        $content .= "VERSION:3.0\n";
        $content .= "FN:{$this->escape($hasContactName ? $fullName : $businessCard->company_name)}\n";
        if(!empty ($businessCard->phone_number)) $content .= "TEL:{$this->escape($businessCard->phone_number)}\n";
        if(!empty ($businessCard->email)) $content .= "EMAIL:{$businessCard->email}\n";
        if(!empty ($businessCard->website)) $content .= "URL:{$businessCard->website}\n";
        if(!empty ($businessCard->address)) $content .= "ADR:;;{$this->escape($businessCard->address)}\n";
        $content .= "ORG:{$this->escape($businessCard->company_name)}\n";
        if ($hasContactName) {
            $content .= "N:{$this->escape($businessCard->last_name ?? '')};{$this->escape($businessCard->first_name ?? '')};;;\n";
        } else {
            $content .= "N:;;;;\n";
        }
        $content .= "END:VCARD\n";

        return $content;
    }

    private function escape(string $string): string
    {
        $string = addcslashes($string, "\\,;");

        return str_replace(["\r\n", "\r", "\n"], '\n', $string);
    }
}
