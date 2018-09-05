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

Route::get('/blogs','BlogsController@index');
Route::get('/blogs/{id}','BlogsController@show');
Route::get('/blogs/{id}}/edit','BlogsController@edit');
Route::get('/create','BlogsController@create');
Route::resource('blogs','BlogsController');