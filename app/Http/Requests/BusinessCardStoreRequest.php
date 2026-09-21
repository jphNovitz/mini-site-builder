<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BusinessCardStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'logo' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:2048'],
            'tagline' => 'nullable|string|max:255',
            'vat_number' => 'nullable|string|max:255',
            'company_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'required_without_all:email,website|string|max:255',
            'email'        => 'required_without_all:phone_number,website|nullable|email',
            'website'      => 'required_without_all:phone_number,email|nullable|url|max:255',
            'social_media_links' => 'nullable|array',
            'social_media_links.*' => 'nullable|url|max:255',
            'accent_color' => 'nullable|string|max:7|regex:/^#[0-9a-fA-F]{6}$/',
        ];
    }

    public function messages(): array
    {
        return [
            'logo.image' => 'Le fichier doit être une image.',
            'logo.max' => 'Le logo ne peut pas dépasser 2 Mo.',
        ];
    }
}

