<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PagesController@index');
Route::get('about','PagesController@about');
Route::get('songs','Songs@songsList');
Route::get('songs/{id}','Songs@show');
Route::get('students','StudentController@information');
//Route::get('students/{id}','StudentController@show');
Route::get('model','StudentController@noMethod');
Route::get('users','UserController@getUser');
//$router->resource('students','StudentController');
