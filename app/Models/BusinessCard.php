<?php

namespace App\Models;

use App\Enums\CardStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCard extends Model
{
    /** @use HasFactory<\Database\Factories\BusinessCardFactory> */
    use HasFactory;

    protected $fillable = [
        'company_name','logo_path','tagline','vat_number','company_number',
        'address','phone_number','email','website','social_media_links',
        'accent_color','slug','status'];

    protected function casts(): array
    {
        return [
            'status' => CardStatus::class,
            'social_media_links' => 'array',
            ];
    }
}
