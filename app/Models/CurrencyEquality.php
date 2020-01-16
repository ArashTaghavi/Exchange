<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyEquality extends Model
{

    protected $fillable = ['currency_id_from', 'currency_id_to', 'ratio'];

    public function currencyFrom()
    {
        return $this->belongsTo(Currency::class,'currency_id_from');
    }

    public function currencyTo()
    {
        return $this->belongsTo(Currency::class,'currency_id_to');
    }

}
