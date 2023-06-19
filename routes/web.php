<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/user', [PagesController::class, 'userPanel'])->name('userPanel');

//AUTH
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister')->middleware('guest');
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin')->middleware('guest');

Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister')->middleware('guest');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin')->middleware('guest');
Route::get('/logout', [AuthController::class, 'postLogout'])->name('postLogout')->middleware('auth');

//ADMIN
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');

    // PRODUCTS
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'show'])->name('admin.products');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.create');
        Route::post('/create', [ProductController::class, 'store'])->name('admin.store');
    });

    // CATEGORIES
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::post('/categories/create', [CategoryController::class, 'store'])->name('admin.category.store');
});