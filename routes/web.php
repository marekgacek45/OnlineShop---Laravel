<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColorController;
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

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
    Route::get('/', [AdminController::class, ('dashboard')])->name('admin.dashboard');

    //PRODUCTS
    Route::group(['prefix'=>'products'],function(){
        Route::get('/', [ProductController::class,('index')])->name('admin.products');
        Route::get('/create', [ProductController::class,('create')])->name('admin.product.create');
        Route::post('/create', [ProductController::class,('store')])->name('admin.product.store');
       
    });
    //CATEGORIES
    Route::group(['prefix'=>'categories'],function(){
        Route::get('/', [CategoryController::class,('index')])->name('admin.categories');
        Route::post('/', [CategoryController::class,('store')])->name('admin.categories.store');
        Route::delete('/{id}', [CategoryController::class,('destroy')])->name('admin.categories.destroy');
        //zmienić na liczbę pojedyncza
    });
    //CATEGORIES
    Route::group(['prefix'=>'teams'],function(){
        Route::get('/', [TeamController::class,('index')])->name('admin.teams');
        Route::post('/', [TeamController::class,('store')])->name('admin.team.store');
        Route::delete('/{id}', [TeamController::class,('destroy')])->name('admin.team.destroy');
        
    });
    //COLORS
    Route::group(['prefix'=>'colors'],function(){
        Route::get('/', [ColorController::class,('index')])->name('admin.colors');
        Route::post('/', [ColorController::class,('store')])->name('admin.color.store');
        Route::delete('/{id}', [ColorController::class,('destroy')])->name('admin.color.destroy');
        
    });
});