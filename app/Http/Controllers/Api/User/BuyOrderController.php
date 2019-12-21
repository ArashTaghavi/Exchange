<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\BuyOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyOrderController extends Controller
{
    public function index()
    {
        return BuyOrder::with('currency:id,title,symbol')
            ->where('user_id', Auth::id())
            ->orderBy('id', 'DESC')->get();
    }

    public function getByID($id)
    {
        return BuyOrder::whereId($id)->whereUserId(Auth::id())->first();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $buy_order = new BuyOrder();
        $buy_order->user_id = Auth::id();
        $buy_order->fill($request->all());
        $buy_order->save();
        return ['message' => __('messages.save_success')];
    }

    public function update(Request $request, $id)
    {
        $this->handleValidate($request);
        $buy_order = $this->getByID($id);
        if ($buy_order->status == BuyOrder::PAID) {
            return ['message' => 'پرداخت شما انجام شده و امکان تغییر سفارش وجود ندارد.'];
        }
        $buy_order->fill($request->all());
        if ($buy_order->getDirty()) {
            $buy_order->status = BuyOrder::WAITING;
        }
        $buy_order->save();
        return ['message' => __('messages.save_success')];
    }

    public function destroy($id)
    {
        $buy_order = $this->getByID($id);
        $buy_order->delete();
        return ['message' => __('messages.delete_success')];
    }

    public function detail($id)
    {
        $buy_order = $this->getByID($id);
        if ($buy_order->status == BuyOrder::PAID)
            return $buy_order;
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
