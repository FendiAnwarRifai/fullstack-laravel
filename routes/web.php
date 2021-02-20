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

Route::get('/', 'Authentication\LoginController@index');
Route::get('register', 'Authentication\RegisterController@index');

Route::post('submitLogin', 'Authentication\LoginController@checkUser');
Route::post('submitRegister', 'Authentication\RegisterController@store');


Route::get('main', 'main\MainController@index');
Route::post('addVehicle', 'main\MainController@store');
Route::post('UpdateVehicle', 'main\MainController@update');
Route::post('destroyVehicle/{id}', 'main\MainController@destroy');


