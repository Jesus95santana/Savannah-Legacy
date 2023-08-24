<?php

use App\Http\Controllers\RoutesController;
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
Route::get('/', [RoutesController::class, 'home'])->name('home');
Route::get('/about-the-academy', [RoutesController::class, 'about'])->name('aboutPage');
Route::get('/faculty-and-staff', [RoutesController::class, 'faculty'])->name('faculty');
Route::get('/admissions', [RoutesController::class, 'admissions'])->name('admissions');
Route::get('/accreditation', [RoutesController::class, 'accreditation'])->name('accreditation');
Route::get('/error', [RoutesController::class, 'error'])->name('error');
