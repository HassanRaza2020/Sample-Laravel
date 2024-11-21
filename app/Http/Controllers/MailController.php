<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\email_registeration;


class MailController extends Controller
{
    //


    function sendEmail(){
        $to ="shiekhhassan1234draq@gmail.com";
        $msg = "dumy mail";
        $subject = "My name is Hassan";

        Mail::to($to)->send(new email_registeration($msg,$subject));


    }


}
