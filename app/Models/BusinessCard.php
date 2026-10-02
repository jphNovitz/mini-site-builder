<?php

namespace App\Models;

use App\Enums\CardStatus;
use App\Enums\QrTarget;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Prunable;

class BusinessCard extends Model
{
    /** @use HasFactory<\Database\Factories\BusinessCardFactory> */
    use HasFactory;
    use Prunable;

    public const DEFAULT_ACCENT = '#2563eb';
    protected $fillable = [
        'company_name', 'logo_path', 'tagline', 'vat_number', 'company_number',
        'address', 'phone_number', 'email', 'website', 'social_media_links',
        'accent_color', 'slug', 'status', 'qr_target', 'consent', 'consent_at'];

    protected function casts(): array
    {
        return [
            'status' => CardStatus::class,
            'qr_target' => QrTarget::class,
            'social_media_links' => 'array',
        ];
    }

    protected static function booted()
    {
        static::creating(function ($businessCard) {
            $businessCard->slug = static::createUniqueSlug($businessCard->company_name);
            if ($businessCard->consent) {
                $businessCard->consent_at = now();
            }
        });
    }

    protected static function createUniqueSlug($companyName)
    {
        $slug = Str::slug($companyName);
        $original = $slug;
        $count = 1;
        while (BusinessCard::where('slug', $slug)->exists()) {
            $slug = $original . '-' . $count++;
        }
        return $slug;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }


    public function prunable()
    {
        return static::where('status', CardStatus::Pending)->where('created_at', '<', now()->subDays(30));
    }

    protected function pruning()
    {
        if ($this->logo_path) {
            Storage::disk('public')->delete($this->logo_path);
        }
    }


}
