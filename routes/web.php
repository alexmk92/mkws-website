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

use App\Events\UserHasRegistered;

Route::group(['prefix' => '/', 'as' => 'Root::'], function() {
    Route::get('/forum', 'ForumController@index');
    Route::get('/broadcast', function() {
        event(new UserHasRegistered('Alex Sims'));
        // Subscribe from node.js
        return view('welcome');
    });

    Route::get('posts/{id}', 'PostsController@show');
});

Route::group(['prefix' => 'admin', 'as' => 'Admin::'], function() {
    Route::get('/dashboard', 'AdminController@dashboard');
});

Route::group(['prefix' => 'auth', 'as' => 'Auth::'], function() {
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::post('/register', 'Auth\RegisterController@register');
});

Route::get('/login', 'UserController@login');
Route::get('/users/{username}', 'UserController@profile');


