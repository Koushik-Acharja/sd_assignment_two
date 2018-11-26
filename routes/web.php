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

Route::get('/m', function () {
    return view('create');
});

//Route::get('form','FormController@test');
Route::get('/','FormController@create');
Route::post('form','FormController@store');