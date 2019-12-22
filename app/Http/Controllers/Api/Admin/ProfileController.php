<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
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
}
