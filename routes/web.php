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

Route::get('/', 'MessageController@create')->name('home');
Route::post('/message', 'MessageController@store')->name('message.store');
Route::get('/message/{id}', 'MessageController@show')->name('message.show');