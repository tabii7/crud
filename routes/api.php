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
Route::get('/student', 'APIController@index');
Route::post('/student', 'APIController@create');
Route::get('/student/{id}', 'APIController@show');
Route::put('/student/{id}', 'APIController@update');
Route::delete('/student/{id}', 'APIController@destroy');
