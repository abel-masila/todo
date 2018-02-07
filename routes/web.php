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

Route::get('/','TaskController@index');

Auth::routes();

Route::get('/task','TaskController@add');
Route::post('task','TaskController@create');

Route::get('/task/{task}','TaskController@edit');
Route::post('/task/{task}','TaskController@update');
