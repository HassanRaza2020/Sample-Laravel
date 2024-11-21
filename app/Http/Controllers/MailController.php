<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\email_registeration;


class MailController extends Controller
{
    //


    function sendEmail(Request $request){
       

        $subject = $request->input('subject');
        $msg = $request->input('body');
        $to = "shiekhhassan1234draq@gmail.com";
     
        Mail::to($to)->send(new email_registeration($msg,$subject));
    

    }


}
