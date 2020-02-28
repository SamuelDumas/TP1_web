<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('film', 'viewFilmsController@index');
Route::post('add-film','addFilmController@store');
Route::get('/films/{id}','viewFilmsController@show');
Route::put('/films_update/{id}','viewFilmsController@update');
Route::delete('/films_destroy/{id}','viewFilmsController@destroy');
Route::get('/films_actors/{id}','actorController@show');