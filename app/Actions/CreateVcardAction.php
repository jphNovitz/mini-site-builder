<?php

namespace App\Actions;

use App\Models\BusinessCard;
use Illuminate\Support\Facades\File;
use InvalidArgumentException;

class CreateVcardAction
{

    /** Indicatif utilisé pour les numéros nationaux (ex. 0471… → +32471…). */
    private const DEFAULT_COUNTRY_CODE = '32';

    /** Longueur maximale d'une ligne, en octets, hors CRLF. */
    private const MAX_LINE_LENGTH = 75;

    public function execute(BusinessCard $businessCard, string $directory): string
    {
        $content = $this->buildVCardContent($businessCard);
        File::put($directory . '/contact.vcf', $content);

        return $content;
    }

    private function buildVCardContent(BusinessCard $businessCard): string
    {

        $company = $this->clean($businessCard->company_name);
        $firstName = $this->clean($businessCard->first_name);
        $lastName = $this->clean($businessCard->last_name);

        $fullName = trim("$firstName $lastName");
        $displayName = $fullName !== '' ? $fullName : $company;

        if ($displayName === '') {
            throw new InvalidArgumentException(
                'Un nom ou une entreprise est nécessaire.'
            );
        }

        $lines = [
            'BEGIN:VCARD',
            'VERSION:3.0',
            'FN:' . $this->escape($displayName),
            'N:' . $this->escape($lastName) . ';' . $this->escape($firstName) . ';;;',
        ];

        // Entreprise
        if ($company !== '') {
            $lines[] = 'ORG:' . $this->escape($company);

            // Carte sans personne : affichée comme une entreprise (iOS / macOS).
            if ($fullName === '') {
                $lines[] = 'X-ABShowAs:COMPANY';
            }
        }

        // Téléphone, normalisé au format international
        $phone = $this->normalizePhone($this->clean($businessCard->phone_number));
        if ($phone !== '') {
            $lines[] = 'TEL;TYPE=WORK,VOICE:' . $this->escape($phone);
        }

        // E-mail (validé, donc sans caractère à échapper)
        $email = $this->clean($businessCard->email);
        if ($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $lines[] = 'EMAIL;TYPE=INTERNET,WORK:' . $email;
        }

        // Adresse libre, placée dans le composant « rue »
        // ADR = boîte postale;complément;rue;ville;région;code postal;pays
        $address = $this->clean($businessCard->address);
        if ($address !== '') {
            $lines[] = 'ADR;TYPE=WORK:;;' . $this->escape($address) . ';;;;';
        }

        $website = $this->normalizeUrl($this->clean($businessCard->website));

        if ($this->isValidUrl($website)) {
            $lines[] = 'URL;TYPE=WORK:' . $website;
        }

        $lines[] = 'URL:' . url('/c/' . $businessCard->slug . '/');

            // Description courte
            $tagline = $this->clean($businessCard->tagline);
            if ($tagline !== '') {
                $lines[] = 'NOTE:' . $this->escape($tagline);
            }

        $lines[] = 'END:VCARD';

        // Repli des lignes longues + fins de ligne CRLF
        return implode(
                "\r\n",
                array_map(fn(string $line) => $this->foldLine($line), $lines)
            ) . "\r\n";
    }

    /**
     * Nom de fichier pour le téléchargement.
     */
    public function filename(BusinessCard $businessCard): string
    {
        $base = $businessCard->slug
            ?: \Illuminate\Support\Str::slug(
                trim(($businessCard->first_name ?? '') . ' ' . ($businessCard->last_name ?? ''))
                    ?: ($businessCard->company_name ?? '')
            );

        return ($base !== '' ? $base : 'contact') . '.vcf';
    }

    // ------------------------------------------------------------------
    // Helpers
    // ------------------------------------------------------------------

    private function clean(mixed $value): string
    {
        return trim((string)($value ?? ''));
    }

    /**
     * Échappe les caractères spéciaux des champs texte vCard.
     */
    private function escape(string $value): string
    {
        $value = str_replace(["\r\n", "\r"], "\n", $value);

        // Élimine les caractères de contrôle non autorisés.
        $value = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', '', $value);

        return str_replace(
            ['\\', ';', ',', "\n"],
            ['\\\\', '\\;', '\\,', '\\n'],
            $value
        );
    }

    /**
     * Ajoute https:// quand l'utilisateur a saisi « monsite.be ».
     */
    private function normalizeUrl(string $url): string
    {
        if ($url !== '' && !preg_match('#^https?://#i', $url)) {
            $url = 'https://' . ltrim($url, '/');
        }

        return $url;
    }

    /**
     * Vérifie que l'URL est valide et utilise HTTP ou HTTPS.
     */
    private function isValidUrl(string $url): bool
    {
        return $url !== ''
            && filter_var($url, FILTER_VALIDATE_URL) !== false
            && in_array(
                strtolower((string)parse_url($url, PHP_URL_SCHEME)),
                ['http', 'https'],
                true
            );
    }

    /**
     * Normalise un numéro au format international (+32471234567).
     *
     * Gère « 0471 23 45 67 », « 0032 471… », « +32 (0)471… ».
     * Un format non reconnu est conservé tel que saisi.
     */
    private function normalizePhone(string $raw): string
    {
        if ($raw === '') {
            return '';
        }

        $value = str_replace('(0)', '', $raw);
        $hasPlus = str_starts_with(ltrim($value), '+');
        $digits = preg_replace('/\D+/', '', $value);

        if ($digits === '') {
            return '';
        }

        if ($hasPlus) {
            return '+' . $digits;
        }

        if (str_starts_with($digits, '00')) {
            return '+' . substr($digits, 2);
        }

        if (str_starts_with($digits, '0')) {
            return '+' . self::DEFAULT_COUNTRY_CODE . substr($digits, 1);
        }

        return $raw;
    }

    /**
     * Extrait les URL valides des réseaux sociaux.
     *
     * Accepte un tableau simple (['https://…']), associatif
     * (['linkedin' => 'https://…']), de sous-tableaux (['url' => '…'])
     * ou une chaîne JSON.
     *
     * @return string[]
     */
    private function socialLinks(mixed $links): array
    {
        if (is_string($links)) {
            $links = json_decode($links, true);
        }

        if (!is_array($links)) {
            return [];
        }

        $urls = [];

        foreach ($links as $link) {
            if (is_array($link)) {
                $link = $link['url'] ?? '';
            }

            $url = $this->normalizeUrl($this->clean($link));

            if ($this->isValidUrl($url)) {
                $urls[] = $url;
            }
        }

        return array_values(array_unique($urls));
    }

    /**
     * Replie les lignes longues sans couper les caractères UTF-8.
     */
    private function foldLine(string $line): string
    {
        $parts = [];

        while (strlen($line) > self::MAX_LINE_LENGTH) {
            $chunk = mb_strcut($line, 0, self::MAX_LINE_LENGTH, 'UTF-8');
            $parts[] = $chunk;

            // L'espace en début de ligne signale une continuation.
            $line = ' ' . substr($line, strlen($chunk));
        }

        $parts[] = $line;

        return implode("\r\n", $parts);
    }
}
