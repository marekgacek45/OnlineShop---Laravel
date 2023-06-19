<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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
// Route::get('/admin', [AdminController::class, ('dashboard')])->name('admin')->middleware('admin');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
    Route::get('/', [AdminController::class, ('dashboard')])->name('admin.dashboard');

    Route::group(['prefix'=>'categories'],function(){
        Route::get('/', [CategoryController::class,('index')])->name('admin.categories');
        Route::post('/', [CategoryController::class,('store')])->name('admin.categories.store');
        Route::delete('/{id}', [CategoryController::class,('destroy')])->name('admin.categories.destroy');
    });
});