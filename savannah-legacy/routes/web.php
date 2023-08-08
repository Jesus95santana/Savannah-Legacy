<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function() {
    return view('home');
})->name('home');
Route::get('/about-the-academy', function () {
    return view('about-the-academy');
})->name('aboutAcademy');
Route::get('/error', function () {
    return view('welcome');
});
