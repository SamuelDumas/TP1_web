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

Route::get('/', 'Auth\LoginController@');
Route::post('add-film','addFilmController@store');
Route::get('films','viewFilmsController@show');
//Route::post ('update','updateController@update');
//Route::get('delete','deleteController@destroy');
//Route::get('')


//Route::post('users', 'Auth\LoginController@__construct');
Route::get('filminfo2', function () {
    return view('welcome');
});