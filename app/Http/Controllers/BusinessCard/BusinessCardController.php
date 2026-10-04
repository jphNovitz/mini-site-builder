<?php

namespace App\Http\Controllers\BusinessCard;

use App\Contracts\SendDeletionConfirmedEmailContract;
use App\Contracts\SendDeletionRequestEmailContract;
use App\Enums\SocialMedia;
use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessCardDeleteRequest;
use App\Http\Requests\BusinessCardStoreRequest;
use App\Models\BusinessCard;
use App\Services\SendConfirmationEmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

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

    public function deleteRequest()
    {
        return view('business-card.delete.delete-form');
    }

    public function deleteAskConfirmation(SendDeletionRequestEmailContract $sendDeletionRequestEmailService, BusinessCardDeleteRequest $request)
    {

        $data = $request->validated();

        if ($businessCard = BusinessCard::where('email', $data['email'])
            ->where('slug', $data['slug'])
            ->first()) {

            $sendDeletionRequestEmailService->send($businessCard);

        }


        return view('business-card.delete.ask-confirmation');
    }

    public function delete(BusinessCard $businessCard, Request $request)
    {
        $destroyUrl = URL::temporarySignedRoute(
            'business-card.destroy',
            now()->addMinutes(30),
            ['businessCard' => $businessCard->slug]
        );

        return view('business-card.delete.confirmation', compact('businessCard', 'destroyUrl'));

    }
    public function destroy(BusinessCard $businessCard, SendDeletionConfirmedEmailContract $sendDeletionConfirmedEmailService)
    {
        $businessCard->delete();
        $sendDeletionConfirmedEmailService->send($businessCard);

        return redirect('/')
            ->with('success', 'La carte a été supprimée.');

    }


}
