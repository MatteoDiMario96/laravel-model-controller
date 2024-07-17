<?php

use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\FilmController;
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

Route::get('/', [HomeController::class, 'view'])->name('guest-home');


Route::get('/movies',[FilmController::class, 'index'])->name('guest-film-list');
