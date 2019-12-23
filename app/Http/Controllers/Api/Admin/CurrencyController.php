<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        return Currency::all();
    }


    public function store(Request $request)
    {
        $this->handleValidate($request);
        $currency = new Currency();
        $currency->fill($request->all());
        $currency->save();

        return ['message' => __('messages.save_success')];
    }


    public function update(Request $request, Currency $currency)
    {
        $this->handleValidate($request);
        $currency->fill($request->all());
        $currency->save();

        return ['message' => __('messages.save_success')];
    }

    public function get(Currency $currency)
    {
        return $currency;
    }


    public function destroy(Currency $currency)
    {
        $currency->delete();

        return ['message' => __('messages.delete_success')];
    }


    public function active(Currency $currency)
    {
        $currency->active = $currency->active == 1 ? 0 : 1;
        $currency->save();
    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'symbol' => 'required',
            'wage' => 'required'
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();
    }
}
