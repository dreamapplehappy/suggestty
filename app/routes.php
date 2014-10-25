<?php
Route::pattern('id', '[0-9]+');

Route::get('/signup',['as' => 'signup','uses' => 'AuthController@create']);
Route::post('/signup',['uses' => 'AuthController@store']);
Route::get('/login', ['as'=>'login', 'uses' => 'AuthController@login']);
Route::post('/login', ['uses' => 'AuthController@signin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::resource('topic','TopicController',['except' => ['index']]);
Route::resource('reply','ReplyController',['only' => ['store', 'edit','update','destroy']]);

Route::post('/vote', ['before' => 'auth','as' => 'vote', 'uses' => 'VoteController@vote']);
