<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UseController;
use  App\Http\Controllers\EmailController;

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
//Route::get('hassan',[UseController::class,'About']);
Route::get('/hassan/{name}', [App\Http\Controllers\UseController::class, 'About']);
Route::get('user-home', [UseController::class,'userHome']);

Route::get('/email', [EmailController::class, 'showForm'])
->name('emails.email');
Route::post('/email', [EmailController::class, 'sendEmail'])
->name('emails.email');



