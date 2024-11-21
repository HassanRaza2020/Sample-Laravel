<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
         'email'=>'required|string|max:255',
         'to'=>'required|email',
         'subject'=>'required|string|max:255'
        ];
    }

   public function messages():array{
  
   return[
    'email.required'=>'Sender email is required',
    'email.email'=>'Sender email is Valid',
    'email.required'=>'Recipient email is required',
    'email.required'=>'Recipent email must be valid',
    'email.required'=>'Subject is required',
   ];

   }


}
