<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/altraAltraProva', function () {
    return view('altraAltraProva');
})->name('altraAltraProva');

Route::get('/altraProva', function () {
    return view('altraProva');
})->name('altraProva');

Route::get('/prova', function () {
    return view('prova');
})->name('prova');