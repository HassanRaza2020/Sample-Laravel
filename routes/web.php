<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/h', function () {
    return view('home');
});


Route::view('/index','index');


/*
Route::get('/about/{name}',function($name){ 
  //  echo $name; 
    return view('About', ['name'=>$name]);});
*/

Route::get('user',  [UseController::class,'getUser']);  
Route::get('about', [UseController::class,'aboutUser']);
Route::get('user/{name}',[UseController::class,'getUserName']); 
Route::get('admin', [UseController::class, 'adminLogin']);
