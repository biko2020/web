<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages.home');
})->name('page_home');// nome de notre route



Route::get('/Notre page about Us', function(){
    return view('pages.about');
})->name('page_about');// nome de notre route