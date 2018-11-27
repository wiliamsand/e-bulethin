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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/boletim', 'BoletimController@index');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/boletim/create', 'BoletimController@create');
	Route::post('/boletim', 'BoletimController@store');
	Route::get('/boletim/{id}', 'BoletimController@show');
	Route::get('/boletim/{id}/edit', 'BoletimController@edit');
	Route::put('/boletim/{id}', 'BoletimController@update');
	Route::get('/boletim/{id}/delete', 'BoletimController@delete');
	Route::delete('/boletim/{id}', 'BoletimController@destroy');
});


