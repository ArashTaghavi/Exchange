<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('layouts.user-dashboard');
    }
}
