<?php

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
   if(auth()->check()){
       return view('profile');
   }
    return view('login');
})->name('login');

Route::post('register', 'AuthController@do_register');

 Route::get('profile', function () {
        return view('profile');
})->middleware('auth');

Route::post('/sing-in', 'AuthController@do_login');
Route::post('/user_update_info', 'AuthController@user_update_info');
Route::get('/logout', 'AuthController@destroy');