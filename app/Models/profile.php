<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
      use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'user1s_id' ,
        'name',
        'age',
        'height',
        'weight',
        'profile_picture',
        'workout_system',
        'following',
        'subscription',
    ];
    public function user(){
    return $this->belongsTo(user1::class,'user1s_id','id');
}
}
