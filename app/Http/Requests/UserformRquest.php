<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserformRquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          
        'name'=>'required|max:255' ,
        'age'=> 'required|max:3' ,
        'height'=>'required|max:3',
        'weight'=>'required|max:3 ',
        'profile_picture'=>'required|image|mimes:png,jpg,jpgp,gif|max:2048',
        'workout_system'=>'required',
        'following'=>'required',
        'subscription'=>'required',
        ];
    }
}
