<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/posts', [App\Http\Controllers\Data::class, 'list']);

Route::view("login", "login");
Route::post("login", [App\Http\Controllers\LoginController::class, "index"]);
//Route::view("profile", "profile");

Route::get("profile", function (){
  if (!session()->has('data')){
    return redirect('login');
  }
  return view('profile');
});

Route::get("logout", function(){
  session()->forget('data');
  return redirect('login');
});
