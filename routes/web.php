<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// persons
Route::get('/person','PersonController@all');
Route::get('/person/{id}','PersonController@show');
Route::post('/person','PersonController@store');
Route::put('/person/{id}','PersonController@update');
Route::delete('/person/{id}','PersonController@delete');