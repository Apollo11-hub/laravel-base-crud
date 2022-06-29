<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){

    $data = config('comics');

    return view('home',['comics'=>$data]);
})->name('home');

Route::get('/comics', function(){
    return view('comic');
})->name('comics');

Route::get('/tv', function(){
    return view('tv');
})->name('tv');

Route::get('/movies', function(){
    return view('movies');
})->name('movies');
