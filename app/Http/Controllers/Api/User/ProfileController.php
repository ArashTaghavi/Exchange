<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return User::find(1);
    }


    public function update(Request $request)
    {
        $user = User::find(1);

        $user->fill($request->except('profile_image'));
        $user->fillImage($request);

        $user->save();

        return ['message' => __('messages.save_success')];

    }
}
