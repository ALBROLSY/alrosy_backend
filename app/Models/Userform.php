<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userform extends Model
{
    use HasFactory;

    protected $fillable = [
        
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
    return $this->belongsTo(user1::class);
}
}
