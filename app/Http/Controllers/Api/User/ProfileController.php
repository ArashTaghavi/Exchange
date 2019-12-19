<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
