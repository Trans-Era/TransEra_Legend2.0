<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CguController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\AboutController;
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

Route::get('/', HomeController::class)->name('home.index');
Route::get('/cgu', CguController::class)->name('cgu.index');
Route::get('/contact', ContactController::class)->name('contact.index');
Route::get('/about', AboutController::class)->name('about.index');
Route::get('/error', ErrorController::class)->name('error.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::get('/cars', \App\Http\Controllers\Car\IndexController::class)->name('cars.index');


Route::get('/cars/{car:slug}', \App\Http\Controllers\Car\ShowController::class)->name('cars.show');
