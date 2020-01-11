<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Document;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {

        return Auth::user();
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->fill($request->except('profile_image'));
        $user->fillImage($request);
        $user->save();

        return ['message' => __('messages.save_success')];

    }

    public function change_password(Request $request)
    {
        $this->handleChangePasswordValidation($request);
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return ['message' => __('messages.save_success')];
    }


    public function handleChangePasswordValidation($request)
    {
        $validator = \Validator::make($request->all(), [
            'password' => 'required|confirmed|',
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function is_verified_user()
    {
        $user_info = User::with(['cards', 'documents'])->where('id', Auth::id())->first();

        $card_status = 0;
        $document_status = 1;

        if ($user_info->cards != null) {
            foreach ($user_info->cards as $card) {
                if ($card->approved == Card::CONFIRM) {
                    $card_status = 1;
                    break;
                }
            }
        }

        $phone_status = $user_info->verify_phone == 1 ? 1 : 0;

        if ($user_info->documents != null) {
            foreach ($user_info->documents as $document) {
                if ($document->approved == Document::WAITING || $document->approved == Document::REJECT) {
                    $document_status = 0;
                    break;
                }
            }
        }
        return (($document_status == 1 && $phone_status == 1 && $card_status == 1) ? 1 : 0);
    }

}
