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

Route::resource('/users', 'API\CustomerController');

Route::post('/users', 'API\CustomerController@store');

Route::put('/users/{id}', 'API\CustomerController@update');

Route::get('/users/destroy/{id}', 'API\CustomerController@destroy');