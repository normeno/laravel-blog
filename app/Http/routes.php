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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middlewareGroups' =>['web']], function () {
    Route::auth();
    Route::get('user/datatable/{type?}', 'UserController@datatable');
    Route::get('user/{type}/list', 'UserController@index');
    Route::resource('user', 'UserController');
});

//Route::resource('user', 'UserController');

//Route::auth();
//Route::get('/home', 'HomeController@index');
