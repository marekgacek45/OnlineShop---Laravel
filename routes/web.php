<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
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


Route::get('/', [PagesController::class, ('home')])->name('home');
Route::get('/user', [PagesController::class, ('userPanel')])->name('userPanel');

//AUTH

Route::get('/register', [AuthController::class, ('showRegister')])->name('showRegister')->middleware('guest');
Route::get('/login', [AuthController::class, ('showLogin')])->name('showLogin')->middleware('guest');

Route::post('/register', [AuthController::class, ('postRegister')])->name('postRegister')->middleware('guest');
Route::post('/login', [AuthController::class, ('postLogin')])->name('postLogin')->middleware('guest');
// Route::post('/logout',[AuthController::class,('postLogout')])->name('postLogout')->middleware('auth');
Route::get('/logout', [AuthController::class, ('postLogout')])->name('postLogout')->middleware('auth');

//ADMIN
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/admin', [AdminController::class, ('adminPanel')])->name('adminPanel');

    //PRODUCTS
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, ('show')])->name('adminPanel.products');
        Route::get('/create', [ProductController::class, ('create')])->name('adminPanel.create');
        Route::post('/create', [ProductController::class, ('store')])->name('adminPanel.store');
    });

});