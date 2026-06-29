<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studuo extends Model
{



   public function user(){
    return $this->belongsTo(user1::class);
}
}
