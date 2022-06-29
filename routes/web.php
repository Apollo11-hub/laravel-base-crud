<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PageController@index')->name('home');


Route::resource('comics','ComicController');
