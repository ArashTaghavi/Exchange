<?php

namespace App\Models;

use App\EloquentHelpers\HasImage;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['title', 'profile_image'];
    use HasImage;

    public $image_path = 'user/document';


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
