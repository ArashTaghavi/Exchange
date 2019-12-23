<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        $panel_address = '#';
        if (Auth::check()) {
            if (Auth::user()->is_admin == User::ADMIN)
                $panel_address = "/admin-dashboard";
            if (Auth::user()->is_admin != User::ADMIN)
                $panel_address = "/user-dashboard";
        }
        return view('site', compact('panel_address'));
    }

    public function blog()
    {
        return view('blog');
    }
}
