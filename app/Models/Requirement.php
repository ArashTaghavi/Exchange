<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    const PROFILE = 1;
    const DOCUMENT = 2;
    const CARD = 3;
    const DEFAULT_CARD = 4;

    public function requirementUser()
    {
        return $this->hasMany(RequirementUser::class);
    }
}
