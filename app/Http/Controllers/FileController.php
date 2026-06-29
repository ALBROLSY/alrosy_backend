<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Http\Resources\FileResource;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files= File::all();
      return  response()->json($files,201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( FileRequest $request,$user_id)
    {
          $file=$request->file('pdf_file');
          $fileName=time().'_'.$file->getClientOriginalName();
          $path=$file->storeAs('pdfs',$fileName,'public');



          $fileSaved=File::create([
            'user1s_id'=>$user_id,
            'pdf_name'=>$file->getClientOriginalName(),
            'pdf_path'=>$path,
            'activation'=>$request->activation
          ]);
      return  response()->json([
        'massage'=>'تم ادخال بياناتك بنجاح',
        'data'=>$fileName,
      ],200);

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
     $user = Auth::user();
     $file = File::where('user1s_id', $user->id)->first();
     return new FileResource($file);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request,$user_id)
    {
        $file=File::where('user1_id',$user_id)->first();
        $file->update($request->all());
     return response()->json([
        'message'=>'تم تعديل الملف بنجاح',
        'data'=>$file
     ],201);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        
    }
}
