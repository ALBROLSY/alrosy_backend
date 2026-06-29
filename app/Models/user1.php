<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class user1 extends Model
{
    use HasApiTokens,HasFactory,Notifiable;
   
    public $timestamps = true;
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'phone',
        'gender',
        'role',
       
    ];
public function files(){
    return $this->hasOne(File::class,'user1s_id','id');
}

public function profile(){
    return $this->hasOne(profile::class,'user1s_id','id');
}
}
