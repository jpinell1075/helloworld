<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');





/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view();
Route::get('mi/ruta/', ControladorDeLaRuta);
Route::post();
Route::put();
Route::delete();
Route::path(); */
