<?php

namespace App\Http\Controllers;

use App\Enums\SocialMedia;
use App\Http\Requests\BusinessCardStoreRequest;
use App\Models\BusinessCard;

class BusinessCardController extends Controller
{
    public function create()
    {
        return view('business-card.create', [
            'socialNetworks' => SocialMedia::cases()
        ]);
    }

    public function store(BusinessCardStoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $request->file('logo')
                ->store('logos', 'public');
        }

        BusinessCard::create($data);

        return view('business-card.confirmation')->with('success', 'merci, en attente de validation');
    }
}
