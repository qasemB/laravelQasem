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

Route::resource('post', 'PostController');
//Route::get('/get-task/{title}', 'HomeController@showTask');

//Route::get('/' , function (\App\Car $car){
//    return view('home' , compact('car'));
//});

