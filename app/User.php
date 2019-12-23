<?php

namespace App;

use App\Models\Card;
use App\Models\Document;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\EloquentHelpers\HasImage;

class User extends Authenticatable
{
    use Notifiable;
    use HasImage;
    public $image_path = 'user/profile';
    const USER = 0;
    const ADMIN = 1;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'father_name', 'national_code', 'address', 'email', 'profile_image',
        'mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function documents()
    {

        return $this->hasMany(Document::class);
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
