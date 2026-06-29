<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studio extends Model
{   public $timestamps = true;
    protected $fillable = [
        'user1_id',
    ];
    public function user(){
    return $this->belongsTo(user1::class);
}
}
