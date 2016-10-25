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
Route::get('/lorem-ipsum/create', 'LoremController@create')->name('lorem-ipsum.create');
Route::post('/lorem-ipsum/store', 'LoremController@store')->name('lorem-ipsum.store');
Route::get('/random-user/create', 'UserController@create')->name('random-user.create');
Route::post('/random-user/store', 'UserController@store')->name('random-user.store');

# Main homepage
Route::get('/', function () {
    return view('home');
})->name('home');
