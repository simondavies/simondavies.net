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

//Auth::routes();

Route::get('/',['as' =>'page.landing', 'uses' => 'PagesController@landing']);



    Route::get('login', ['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as'=>'login.post','uses'=>'Auth\LoginController@login']);
    Route::post('logout', ['as'=>'logout','uses'=>'Auth\LoginController@logout']);
