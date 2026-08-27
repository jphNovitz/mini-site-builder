<?php

namespace App\Models;

use App\Enums\CardStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected static function booted()
    {
        static::creating(function ($businessCard) {
            $businessCard->slug = static::createUniqueSlug($businessCard->company_name);
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
}
