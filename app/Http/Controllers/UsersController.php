<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UsersController extends Controller
{
    
public function register(Request $Request){
  $Request->validate([
    'user_name'=> 'required|string|max:255 ',
    'email'=>' required|email|max:255|unique:users,email',
    'password'=>'required|confirmed|min:6',
    'phone'=>'required|numeric|digits:11',
  ]);
  users::create([
      'user_name'=>$Request->user_name,
      'email'=>$Request->email,
      'password'=>Hash::make($Request->password),
      'phone'=>$Request->phone,

  ]);
   return response()->json(['massage'=>"تم انشاء حسابك بنجاح"],201);
}
public function login(request $request){
    $request->validate([
      'email'=>'required|email',
       'password'=>'required'
    ]);
    if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
      $user=Auth::user();
      $token=$user->createToken('token')->plainTextToken;
     return response()->json(['token'=>$token],200);
    };
    return response()->json(['massage'=>'بيانات  الدخول غير صحيحه'],401);
}
public function logout(){
    
}







}
