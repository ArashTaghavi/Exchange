<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['bank_name', 'card_no', 'account_no', 'sheba_no', 'is_default'];

    const CONFIRM = 1;
    const REJECT = 0;
    const WAITING = 2;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
