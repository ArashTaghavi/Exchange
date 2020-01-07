<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\BuyOrder;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{

    public function index()
    {
        return Card::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
    }

    public function getByID($id)
    {
        return Card::whereId($id)->whereUserId(Auth::id())->first();
    }


    public function approved()
    {
        return Card::where('approved', 1)->get();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $card = new Card();

        $card->user_id = Auth::id();
        $card->fill($request->all());
        $card->save();
        return ['message' => __('messages.save_success')];
    }

    public function update(Request $request, $id)
    {
        $this->handleValidate($request);
        $card = $this->getByID($id);
        $card->fill($request->all());
        if ($card->getDirty()) {
            $card->approved = Card::WAITING;
        }
        $card->save();
        return ['message' => __('messages.save_success')];
    }

    public function destroy($id)
    {
        $card = $this->getByID($id);
        $card->delete();
        return ['message' => __('messages.delete_success')];
    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'bank_name' => 'required',
            'card_no' => 'required',
            'account_no' => 'required'
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();
    }
}
