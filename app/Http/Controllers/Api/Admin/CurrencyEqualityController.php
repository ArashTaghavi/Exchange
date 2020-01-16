<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\CurrencyEquality;
use Illuminate\Http\Request;

class CurrencyEqualityController extends Controller
{

    public function index()
    {
        return CurrencyEquality::with(['currencyFrom', 'currencyTo'])->get();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $ce = new CurrencyEquality();
        $ce->fill($request->all());
        $ce->save();

        return ['message' => __('messages.save_success')];

    }

    public function update(Request $request, CurrencyEquality $currencyEquality)
    {
        $this->handleValidate($request);

        $currencyEquality->fill($request->all());
        $currencyEquality->save();

        return ['message' => __('messages.save_success')];

    }

    public function get_by_id(CurrencyEquality $currencyEquality)
    {
        return $currencyEquality;
    }


    public function destroy(CurrencyEquality $currencyEquality)
    {
        $currencyEquality->delete();

        return ['message' => __('messages.delete_success')];
    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'currency_id_from' => 'required',
            'currency_id_to' => 'required',
            'ratio' => 'required',
        ]);

        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }

        return $validator->getData();
    }

}
