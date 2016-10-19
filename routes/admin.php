<?php
/**
 * Admin routes
 */

 Route::get('/', 'Auth\LoginController@showLoginForm');
 Route::get('login', ['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
 Route::post('/', ['as'=>'login.post','uses'=>'Auth\LoginController@login']);

 Route::post('logout', ['as'=>'logout.post','uses'=>'Auth\LoginController@logout']);

    //-- auth protected routes
    Route::group(['middleware'=>'auth'], function () {
        Route::get('/dashboard', ['as' => 'manager.dashboard', 'uses' => 'Admin@dashboard']);

    });
