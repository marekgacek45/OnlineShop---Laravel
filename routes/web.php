<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
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


Route::get('/',[PagesController::class,('home')])->name('home');

//AUTH

Route::get('/register',[AuthController::class,('showRegister')])->name('showRegister')->middleware('guest');
Route::get('/login',[AuthController::class,('showLogin')])->name('showLogin')->middleware('guest');

Route::post('/register',[AuthController::class,('postRegister')])->name('postRegister')->middleware('guest');
Route::post('/login',[AuthController::class,('postLogin')])->name('postLogin')->middleware('guest');
Route::post('/logout',[AuthController::class,('postLogout')])->name('postLogout')->middleware('auth');

