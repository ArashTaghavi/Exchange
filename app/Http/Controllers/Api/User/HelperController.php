<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function currency()
    {
        return Currency::whereActive(1)->get();
    }
}
