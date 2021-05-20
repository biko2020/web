<?php

use Illuminate\Support\Facades\Route;

// nome de notre route soit en le met au debut
//Route::name->('page_home')get('/', function()

/* old function
Route::get('/', function(){ 
    return view('pages.home');
})-> name('page_home');


Route::get('/Notre page about Us', function(){
    return view('pages.about');
})->name('page_about');// nome de notre route soit en le met en bas
*/

/** ----------Code PHP-------------------- ***/
/* Route::get('/', fn() => view('pages.home')->name('page_home'));
   Route::get('/About-us', fn() => view('pages.about')->name('page_about'));
*/

/**------------- Code Laravel-------------- ***/

Route::view('/', 'pages.home')->name('page_home');
Route::view('/About-Us', 'pages.about')->name('page_about');
