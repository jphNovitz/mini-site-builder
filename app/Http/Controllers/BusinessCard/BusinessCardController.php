<?php

namespace App\Http\Controllers\BusinessCard;

use App\Actions\Emails\SendConfirmationUserAction;
use App\Enums\SocialMedia;
use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessCardStoreRequest;
use App\Models\BusinessCard;
use App\Services\SendConfirmationEmailService;

class BusinessCardController extends Controller
{
    public function create()
    {
        return view('business-card.create', [
            'socialNetworks' => SocialMedia::cases()
        ]);
    }

    public function store(BusinessCardStoreRequest $request,
                          SendConfirmationEmailService $sendConfirmationEmailService)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $request->file('logo')
                ->store('logos', 'public');
        }

        $businessCard = BusinessCard::create($data);

        $sendConfirmationEmailService->send($businessCard);

        return view('business-card.confirmation')->with('success', 'merci, en attente de validation');
    }

}
