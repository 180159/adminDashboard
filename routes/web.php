<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','AdminController@show');
Route::get('edit&{id}','AdminController@edit');
Route::post('update','AdminController@update');

Route::resource('user','UserController');

Route::get('role','RoleController@index');


// controller to noOfUser view
Route::get('/noOfUser', array('as' => 'noOfUserController', 'uses' => 'noOfUserController@show'));

//controller to system status view
Route::group(['middleware' => 'web'], function() {
   Route::get('/status', 'StatusController@show');
});