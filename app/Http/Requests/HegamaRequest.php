<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HegamaRequest extends FormRequest
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
         'name'=>'required|string|max:255',
        'height'=>'required|integer|min:3',
        'age'=>'required|integer|min:3',
        'phone'=>'required|string|min:11',
        'medical_history'=>'required|string',
        'hegama'=>'required',
        ];
    }
}
