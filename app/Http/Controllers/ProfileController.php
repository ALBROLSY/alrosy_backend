<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserformRquest;
use App\Http\Resources\ProfileResource;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
 public function index(){
    $userform = profile::all();
    return response()->json($userform);
}
 public function store( UserformRquest $request)
   {
   $user_id=Auth::user()->id;
    $validateddata=$request->validated();
    $validateddata['user1s_id']=$user_id;
    if($request->hasFile('profile_picture')){
     $path= $request->file('profile_picture')->store('picture','public');
     $validateddata['profile_picture']=$path;
    }
    $user= profile::create( $validateddata );
         return response()->json([
        
        'massage'=>'تم تسجيل بياناتك بنجاح',
        'user'=>$user
         ],200);
    
    
   }
 public function update(request $request,$id)
   {
    $userformupdate= profile::findOrfail($id);
    $userformupdate->update(
     
        $request->all()

     );
    return response()->json([
            'message' => 'تم تحديث البيانات بنجاح '],200);
    
   
   }
public function show(){
   
     $user = Auth::user();
     $profile = profile::where('user1s_id', $user->id)->first();
     return new ProfileResource($profile);
    
   }
public function delete($id){
    $userformdelete=profile::findOrfail($id);
    $userformdelete->delete();
    return response()->json([
            'message' => 'تم الحذف البيانات بنجاح '],200);
   }
}
 