<?php

namespace App\Enums;

enum SocialMedia: string
{
    case Facebook = 'facebook';
    case Instagram = 'instagram';
    case LinkedIn = 'linkedin';
    case Tiktok = 'tik-tok';
    case X = 'x';
    case Whatsapp = 'whatsapp';
    case Youtube = 'youtube';

    public function url(): string
    {
        return match ($this) {
            self::Facebook => 'https://facebook.com',
            self::Instagram => 'https://instagram.com',
            self::LinkedIn => 'https://linkedin.com',
            self::Tiktok => 'https://tiktok.com',
            self::X => 'https://x.com',
            self::Whatsapp => 'https://whatsapp.com',
            self::Youtube => 'https://youtube.com',
        };
    }

    public function label(): string
    {
        return match ($this) {
            self::Facebook => 'Facebook',
            self::Instagram => 'Instagram',
            self::LinkedIn => 'LinkedIn',
            self::Tiktok => 'TikTok',
            self::X => 'X',
            self::Whatsapp => 'WhatsApp',
            self::Youtube => 'YouTube',
        };
    }

}
