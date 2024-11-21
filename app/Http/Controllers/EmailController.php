<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;




class EmailController extends Controller
{
    
    public function showForm(){
        return view('emails.email');
    }


    public function sendEmail(EmailRequest $request)
    {

    $validatedData = $request
    ->validate([
        'email'=>'required|email',
        'to'=>'required|email',
        'subject'=> 'required|string|max:255'
      ]);

      return $validatedData;

     



    }

  


}
