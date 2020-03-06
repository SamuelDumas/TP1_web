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
Route::get('profil', [ 'middleware' => 'auth', 'uses' => 'UserController@show' ]);
Route::get('film', ['middleware'=>'auth', 'uses'=>'filmController@index']);



//Routes users
Route::get('/users/{id}',['middlewear'=>'auth','uses'=>'UserController@show']);
Route::post('/createUser','RegisterController@create');
Route::put('/updateUser','UserController@update');

//Routes film
Route::post('add-film','addFilmController@store');
Route::get('/films/{id}','filmController@show');
Route::put('/films_update/{id}','filmController@update');
Route::delete('/films_destroy/{id}','filmController@destroy');
Route::get('/films_actors/{id}','actorController@show');
Route::get('/searchFilms','filmController@search');


//Routes critics
Route::get('/critics','criticsController@index');
Route::post('/critics_add','criticsController@store');
