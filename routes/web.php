<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts.deneme');
});
Route::get('/car', function () {
    return view('partials.carousel');
});
Route::get('/asd', function () {
    return view('site.asdasd');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
