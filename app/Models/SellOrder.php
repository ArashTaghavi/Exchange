<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellOrder extends Model
{

    const REJECT = 0;
    const CONFIRM = 1;
    const WAITING = 2;
    const PAID = 3;
    protected $fillable = ['amount', 'currency_id','card_id'];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
