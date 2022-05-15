<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestViewController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/details/{id}', [DetailController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/success', [CartController::class, 'success']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/products', [DashboardProductController::class, 'index']);

/** Testing View */
Route::get('/register/success', [TestViewController::class, 'register_success']);

Auth::routes();
