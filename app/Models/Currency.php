<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

    protected $fillable = ['title', 'symbol', 'wage'];

    public function bOrders()
    {
        return $this->hasMany(BuyOrder::class);
    }

    public function sOrders()
    {
        return $this->hasMany(BuyOrder::class);
    }


    public function currencyEqualitiesFrom()
    {
        return $this->hasMany(CurrencyEquality::class, 'currency_id_from');
    }

    public function currencyEqualitiesTo()
    {
        return $this->hasMany(CurrencyEquality::class, 'currency_id_to');
    }
}
