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
/*
Route::get('/', function () {
	dd(1);
    return view('welcome');
});*/
Route::resource('/users', 'Web\CustomerController');

Route::post('/users/{id}', 'Web\CustomerController@update');

Route::get('/users/destroy/{id}', 'Web\CustomerController@destroy');
