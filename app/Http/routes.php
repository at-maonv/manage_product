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

//Route::group(['middleware' => ['web']], function () {
//    Route::get('/login', ['as' => 'login', 'users' => 'AuthController@login']);
//    Route::get('/handleLogin', 'AdminAuth\AuthController@adminLogin');
//    //Route::post('web-login', ['as'=>'web-login','uses'=>'Auth\AuthController@webLoginPost']);
//    //Route::get('admin-login', 'AdminAuth\AuthController@adminLogin');
//    //Route::post('admin-login', ['as'=>'admin-login','uses'=>'AdminAuth\AuthController@adminLoginPost']);
//});




