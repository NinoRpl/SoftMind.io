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

// Route::post('/Lampu/Control/update', 'LampuController@controllkuApi');

Route::post('/Lampu/Control/update', 'LampuController@controllkuApi');

Route::get('/home_user/kontrol', 'UserController@kontrolStroreApi');
Route::get('/home_user/kontrol/{id}', 'UserController@kontrolGetApi');
Route::post('/home_user/kontrol/{id}/kontrolpost', 'UserController@kontrolPostApi');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
