<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth;
class users extends Model
{
    use Auth;
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'phone',
    ];
     protected $hidden = [
        'password',
        'remember_token',
    ];
     protected function casts(): array
    {
        return [
           //'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
