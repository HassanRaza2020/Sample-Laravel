<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewException;

class UseController extends Controller
{
    //

    function getUser(){
        return view('users');
    }

    function aboutUser(){
        return "Hello, this is Hassan Raza";
    }

    function getUserName($name){

       // echo "Hello this is ".$name;
        return view('users', ['name'=>$name]);      
    }


    function adminLogin(){
        return view('admin.login');
    }

    function About($name){
        return view('about',['name' => $name]);
    }

    function userHome(){
        return view('home'); 
    }


}
