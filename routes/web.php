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

Route::get('/', 'viewFilmsController@index');
Route::post('add-film','viewFilmsController@store');
Route::get('films','viewFilmsController@show');
Route::post ('update','viewFilmsController@update');
Route::get('delete','viewFilmsController@destroy');
//Route::get('actors','actorsController@show');
//Route::post()


//Route::post('users', 'Auth\LoginController@__construct');
Route::get('filminfo2', function () {
    return view('welcome');
});