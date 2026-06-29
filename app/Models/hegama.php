<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hegama extends Model
{
    use HasFactory;
     public $timestamps = true;
    protected $fillable = [
        'name',
        'height',
        'age',
        'phone',
        'medical_history',
        'hegama',
    ];
   
}
