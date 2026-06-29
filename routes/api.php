<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\HegamaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User1Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Symfony\Component\HttpKernel\HttpCache\Store;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register',[User1Controller::class,'register']);
Route::post('/login',[User1Controller::class,'login']);
Route::get('/AllUsers',[User1Controller::class,'index']);
// دا اليوزر فورم
Route::middleware('auth:sanctum')->group(function(){
            
            Route::post('logout',[User1Controller::class,'logout']);
            Route::post('Profile',[ProfileController::class,'store']);
            Route::get('profile',[ProfileController::class,'show']);
            Route::get('file',[FileController::class,'show']);
            Route::get('getUser',[User1Controller::class,'show']);
});

Route::get('profile',[ProfileController::class,'index']);
Route::put('profile/{id}',[ProfileController::class,'update']);
Route::delete('profile/{id}',[ProfileController::class,'delete']);

// دا الحجامه 
Route::post('hejama',[HegamaController::class,'Store']);
Route:: get('hejama',[HegamaController::class,'index']);
Route:: put('hejamaupdate/{id}',[HegamaController::class,'update']);
Route:: get('hejama/{id}',[HegamaController::class,'show']);
Route:: delete('hejama/{id}',[HegamaController::class,'delete']);
// this files route
Route::post('files',[FileController::class,'store']);
Route::get('Files',[FileController::class,'index']);
Route::put('file',[FileController::class,'update']);
//studio route
