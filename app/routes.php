<?php
Route::pattern('id', '[0-9]+');

Route::get('/signup',['as' => 'signup','uses' => 'AuthController@create']);
Route::post('/signup',['uses' => 'AuthController@store']);
Route::get('/login', ['as'=>'login', 'uses' => 'AuthController@login']);
Route::post('/login', ['uses' => 'AuthController@signin']);

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);
