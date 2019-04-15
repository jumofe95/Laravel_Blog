<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UserController@index');

Route::get('/users/{id}', 'UserController@showUser')->where('id', '[0-9]+');

Route::get('/users/new', 'UserController@createUser');
