<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middlewareGroups' =>['web']], function () {
    Route::auth();
    Route::get('user/datatable/{type?}', 'UserController@datatable');
    Route::get('user/{type}/list', 'UserController@index');
    Route::resource('user', 'UserController');
});
