<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequirementUser extends Model
{


    public function requirements()
    {
        return $this->belongsTo(Requirement::class);
    }
}
