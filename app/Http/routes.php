<?php

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [
    'as' => 'posts.home',
    'uses' => 'PostController@home'
]);

Route::get('/{category}/{post}', [
    'as' => 'posts.view',
    'uses' => 'PostController@view'
]);

Route::group(['middlewareGroups' =>['web']], function () {
    Route::auth();
    Route::get('user/datatable/{type}', 'UserController@datatable');
    Route::get('user/{type}/list', 'UserController@index');
    Route::resource('user', 'UserController');

    Route::get('/install', [
        'as' => 'install.index',
        'uses' => 'InstallController@index'
    ]);

    Route::post('/install', [
        'as'    =>  'install.storebasic',
        'uses'  =>  'InstallController@storebasic'
    ]);

    Route::get('install/database', [
        'as'    =>  'install.database',
        'uses'  =>  'InstallController@database'
    ]);

    Route::get('install/key', [
        'as'    =>  'install.key',
        function(){
            Artisan::call('key:generate');
            Artisan::call('migrate');
            return redirect()->route('install.database');
        }
    ]);

    Route::get('install/user', [
        'as'    =>  'install.user',
        'uses'  =>  'InstallController@user'
    ]);

    Route::post('/install/storeuser', [
        'as'    =>  'install.storeuser',
        'uses'  =>  'InstallController@storeuser'
    ]);

    Route::get('/install/finish', [
        'as'    =>  'install.finish',
        'uses'  =>  'InstallController@finish'
    ]);

    Route::get('frontend', [
        function(){
            $categories = App\Category::all();
            $posts = App\Post::all();
            return view('frontend.post.index', compact('categories', 'posts'));
        }
    ]);
});