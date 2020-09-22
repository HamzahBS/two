<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');

Route::get('/about','PageController@about');

Route::get('/contact','PageController@contact');

Route::get('/signup','PageController@signup');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
