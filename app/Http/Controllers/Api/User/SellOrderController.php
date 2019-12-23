<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\SellOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellOrderController extends Controller
{
    public function index()
    {
        return SellOrder::with('currency:id,title,symbol')
            ->where('user_id', Auth::id())
            ->orderBy('id', 'DESC')->get();
    }

    public function getByID($id)
    {
        return SellOrder::whereId($id)->whereUserId(Auth::id())->first();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $sell_order = new SellOrder();
        $sell_order->user_id = Auth::id();
        $sell_order->fill($request->all());
        $sell_order->save();
        return ['message' => __('messages.save_success')];
    }

    public function update(Request $request, $id)
    {
        $this->handleValidate($request);
        $sell_order = $this->getByID($id);
        if ($sell_order->status == SellOrder::PAID) {
            return ['message' => 'پرداخت شما انجام شده و امکان تغییر سفارش وجود ندارد.'];
        }
        $sell_order->fill($request->all());
        if ($sell_order->getDirty()) {
            $sell_order->status = SellOrder::WAITING;
        }
        $sell_order->save();
        return ['message' => __('messages.save_success')];
    }

    public function destroy($id)
    {
        $sell_order = $this->getByID($id);
        $sell_order->delete();
        return ['message' => __('messages.delete_success')];
    }

    public function detail($id)
    {
        $sell_order = $this->getByID($id);
        if ($sell_order->status == SellOrder::PAID)
            return $sell_order;
        return [];
    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'amount' => 'required',
            'currency_id' => 'required',
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();
    }
}
