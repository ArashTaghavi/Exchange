<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', '!=', 1)->get();

        return $users;
    }


    public function block($id)
    {
        $user = User::find($id);
        $user->is_block = !$user->is_block;
        $user->save();
        return ['message' => __('messages.save_success')];
    }
}
