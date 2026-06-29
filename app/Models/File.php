<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  use HasFactory;
 protected $fillable = [
       'user1s_id',
       'pdf_name',
       'pdf_path',
       'activation',

 ];
  public function user(){
    return $this->belongsTo(user1::class,'user1s_id','id');
}
}