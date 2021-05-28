<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// --------------------------- route default template -----------------
Route::get('login', function(){
    return view('extras.login');
});

Route::get('register', function(){
    return view('extras.register');
});

Route::get('forgot-password', function(){
    return view('extras.forgot-password');
});

Route::get('recovery-password', function(){
    return view('extras.recovery-password');
});

Route::get('lockscreen', function(){
    return view('extras.lockscreen');
});
// --------------------------------------------------------------------