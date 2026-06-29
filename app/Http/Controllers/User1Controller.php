<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\User1Resource;
use App\Models\user1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

;
use Illuminate\Support\Facades\Hash;

class User1Controller extends Controller
{
 public function index(){
    $userindex = user1::all();
    return response()->json($userindex);}




 public function register(UserRequest $request){
      $user =  $request->validated();
      $user['password']=Hash::make($user['password']);
      $user['role']= $request->role;
        user1::create($user);
     return response()->json([
        'massage'=>'تم تسجيل البيانات بنجاح',
        'user'=>$user,
         
     ],201);
    }
 public function login(request $request){

    $user= $request->validate([
    'email'=>'required|email',
      'password'=>'required|string',
     ]);

     $user = user1::where('email', $request->email)->first();

     if (!$user || !Hash::check($request->password, $user->password)) {
      return response()->json([
            'message' => 'Invalid email or password'
          ], 401);
  };

      
          // إنشاء التوكن
    
    $token = $user->createToken('users-tokens')->plainTextToken;

    return response()->json([
        
        'token' => $token,
        'token_type'=>'Bearer',
        'User'=>$user
        ], 200);  

 }

 public function logout( Request $Request){

    $Request->user()->currentAccessToken()->delete();
   return response()->json([
    'massage'=>'logout successfuly'
   ],200);



    }
    public function show(){
   
      $user = Auth::user();
      $user->load(['files','profile']);
      return response()->json([
        
         'User'=>new User1Resource($user)
         ], 200);  
 
 
 
   }
}
