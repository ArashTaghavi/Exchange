<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\BuyOrder;
use App\Models\Card;
use App\Models\Currency;
use App\Models\SellOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelperController extends Controller
{
    public function currency()
    {
        return Currency::whereActive(1)->get();
    }

    public function calculate_payment_amount($value, $currency_id, $exchange_type)
    {
        $currency = Currency::where('id', $currency_id)->where('active', 1)->first();

        if ($exchange_type == 2) {
            // Buy from us
            return $currency->buy * $value;
        }
        if ($exchange_type == 1) {
            // Sell to us
            return $currency->sell * $value;
        }
    }

    public function buy_and_sell(Request $request)
    {
        $this->handleValidateBuyAndSell($request);
        if ($request->exchange_type == 1) {
            // Buy user from site
            $buy_order = new BuyOrder();
            $buy_order->user_id = Auth::id();
            $buy_order->fill($request->all());
            $buy_order->save();
        }
        if ($request->exchange_type == 2) {
            // Sell user to site
            $check_approved_card = Card::find($request->card_id);
            if (!empty($check_approved_card) && $check_approved_card->approved != Card::CONFIRM)
                abort(403, 'کارت شما تایید شده نیست.');

            $sell_order = new SellOrder();
            $sell_order->user_id = Auth::id();
            $sell_order->fill($request->all());
            $sell_order->save();
        }

        return ['message' => __('messages.save_success')];
    }

    public function handleValidateBuyAndSell($request)
    {
        $validator = \Validator::make($request->all(), [
            'exchange_type' => 'required',
            'currency_id' => 'required',
            'public_key' => $request->exchange_type == 1 ? 'required' : 'nullable',
            'card_id' => $request->exchange_type == 2 ? 'required' : 'nullable',
            'amount' => 'required'
        ], [
            'exchange_type.required' => 'ورود نوع سفارش الزامی است.',
            'public_key.required' => 'ورود شماره حساب ارزی الزامی است.',
            'card_id.required' => 'ورود شماره کارت الزامی است.',

        ]);

        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }

        return $validator->getData();
    }
}
