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
Route::get('seeder','seederController@data');
Route::get('articals','ArticalController@index');
Route::get('artical/create','ArticalController@create');
Route::post('artical','ArticalController@store');
Route::get('test',function(){
    return "php unit testss";
});

//$router->resource('students','StudentController');
