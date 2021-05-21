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
    return view('welcome');
});
Route::get('/pizzas','pizzaController@index')->middleware('auth');
Route::get('/pizzas/{id}','pizzaController@show')->middleware('auth');
Route::get('/create','pizzaController@create');
Route::post('/pizzas','pizzaController@store');
Route::delete('/pizzas/{id}','pizzaController@destroy')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
