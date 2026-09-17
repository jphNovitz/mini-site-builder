<?php

namespace App\Http\Controllers\Admin;

use App\Enums\SocialMedia;
use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessCardStoreRequest;
use App\Models\BusinessCard;
use Illuminate\Http\Request;

class BusinessCardController extends Controller
{
    public function index(){

        $businessCards = BusinessCard::all();

        return view('admin.business-card.index', compact('businessCards'));

    }

    public function show(BusinessCard $businessCard)
    {
        return view('admin.business-card.show', compact('businessCard'));
    }

    public function edit(BusinessCard $businessCard)
    {
        return view('admin.business-card.edit', [
            'businessCard' => $businessCard,
            'socialNetworks' => SocialMedia::cases(),
        ]);
    }
    public function update(BusinessCard $businessCard, BusinessCardStoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $request->file('logo')
                ->store('logos', 'public');
        }

        $businessCard->update($data);
        return redirect()->route('admin.cards.show', $businessCard)->with('success', 'Carte mise à jour avec succès.');

    }

    public function approve(BusinessCard $businessCard, Request $request)
    {
        $businessCard->status = 'published';
        $businessCard->save();

        return redirect()->route('admin.cards.index')->with('success', 'Carte approuvée avec succès.');
    }
}
