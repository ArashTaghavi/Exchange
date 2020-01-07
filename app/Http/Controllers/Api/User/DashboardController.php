<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Document;
use App\Models\Requirement;
use App\Models\RequirementUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('layouts.user-dashboard');
    }

    public function requirements()
    {
        return Requirement::all();
    }

    public function user_requirements()
    {
        return RequirementUser::where('id', Auth::id())->get();
    }

    public function user_set_phone(Request $request)
    {
        Auth::user()->fill($request->all())->save();
        return ['message' => __('messages.save_success')];

    }

    public function user_info()
    {
        $user_info = User::with(['cards', 'documents'])->where('id', Auth::id())->first();
        $phone_status = $user_info->verify_phone ? true : false;
        $document_status = empty($user_info->documents) ? false : true;
        $card_status = false;

        if ($user_info->cards != null) {
            foreach ($user_info->cards as $card) {
                if ($card->approved == Card::CONFIRM) {
                    $card_status = true;
                    break;
                }
            }
        }

        if ($user_info->documents != null) {
            foreach ($user_info->documents as $document) {
                if ($document->approved == Document::WAITING || $document->approved == Document::REJECT) {
                    $document_status = false;
                    break;
                }
            }
        }

        return compact('phone_status', 'document_status', 'card_status');
    }
}
