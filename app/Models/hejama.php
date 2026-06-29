<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  hejama extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'height',
        'age',
        'medical_history',
        'hegama',
    ];
}
