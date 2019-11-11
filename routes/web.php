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

// Login
Route::get('/home_user', 'UserController@index');
Route::get('/signin', 'UserController@login');
Route::post('/signinPost', 'UserController@loginPost');
Route::get('/signup', 'UserController@register');
Route::post('/signupPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');
// End Login

// Manajemen Data Siramin
Route::get('/home_user/tambahDataSiramin', 'UserController@createDataGet');
Route::post('/home_user/tambahDataSiraminPost', 'UserController@createDataPost');
Route::get('home_user/kontrol/{id}/hapus', 'UserController@deleteDataSiramin');

// AdminUser
Route::get('/home_user/kontrol', 'UserController@kontrolStore');
Route::get('/home_user/kontrol/{id}', 'UserController@kontrolGet');
Route::post('/home_user/kontrol/{id}/kontrolPost', 'UserController@kontrolPost');
Route::get('/home_user/monitor', 'UserController@monitor');
Route::get('/home_user/kontrol/{id}/edit', 'UserController@editDataGet');
Route::post('/home_user/kontrol/{id}/editPost', 'UserController@editDataPost');
Route::get('/home_user/report', 'MailController@reportGet');
// End AmdminUser

// AdminMagement
Route::get('/home_admin', 'AdminController@index');
// End_AdminMagement

Route::get('/', 'DeveloperController@index');

Route::get('/learn', function () {
    return view('page/learn');
});
Route::get('/shop', function () {
    return view('page/shop');
});
Route::get('/project', function () {
    return view('page/project');
});

Route::get('/login', 'LoginController@form');

Route::get('/signup', 'SignupController@form');
Route::post('/signup', 'SignupController@store');

Route::get('/admin', 'AdminController@index');

Route::get('/Lampu', 'LampuController@store');
Route::get('/Lampu/Control/{id}', 'LampuController@controller');
Route::post('/Lampu/Control/update', 'LampuController@controllku');

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
