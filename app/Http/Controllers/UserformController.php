<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserformRquest;
use App\Models\Userform;

use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class UserformController extends Controller
{  public function index(){
    $userform = Userform::all();
    return response()->json($userform);
}
   public function store(UserformRquest $request)
   {
   
    Userform::create( $request->validated() );
         return response()->json('تم تسجيل الحساب بنجاح',201);
    
    
   
   }
    public function update(request $request,$id)
   {
    $userformupdate= Userform::findOrfail($id);
    $userformupdate->update(
     
        $request->all()

     );
    return response()->json([
            'message' => 'تم تحديث البيانات بنجاح '],201);
    
   
   }
   public function show($id){
    $userformshow= Userform::findorfail($id);
     return response()->json($userformshow,201);
   }
   public function delete(Request $Rrquest ,$id){
    $userformdelete=Userform::findOrfail($id);
    $userformdelete->delete();
    return response()->json([
            'message' => 'تم الحذف البيانات بنجاح '],200);
   }
}