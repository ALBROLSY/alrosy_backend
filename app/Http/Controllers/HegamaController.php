<?php

namespace App\Http\Controllers;

use App\Http\Requests\HegamaRequest;
use App\Models\hegama;
use Illuminate\Http\Request;

class HegamaController extends Controller
{
    public function index(){
        $hegama = hegama::all();
        return response()->json($hegama);
    }
    public function store( HegamaRequest $request){
       
      
     $hegamastore = hegama::create( $request->validated() );
        return response()->json([ 'data'=>$hegamastore,
        'message'=>'تم حجز الجلسه بنجاح'
             ],201);
    }
    public function update( request $request ,$id){
       
        $hejamaupdate=hegama::findOrfail($id);
        $hejamaupdate->update(  $request->all()     );
        return response()->json($hejamaupdate,201);
    }
    public function show($id){
        $show=hegama::findOrfail($id);
        return response()->json($show,201);
    }
    public function delete( $id){
        $hegamadelete=hegama::findOrfail($id);
        $hegamadelete->delete();
        return response()->json([
                'message' => 'تم الحذف البيانات بنجاح '],200);
       }
       

    }
    


