<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('layouts.admin-dashboard');
    }
}
