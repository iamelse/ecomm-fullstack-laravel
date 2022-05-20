<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionsController;
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
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create']);
Route::get('/dashboard/products/details/{id}', [DashboardProductController::class, 'details']);

Route::get('/dashboard/transactions', [DashboardTransactionsController::class, 'index']);
Route::get('/dashboard/transactions/{id}', [DashboardTransactionsController::class, 'details']);

Route::get('/dashboard/settings', [DashboardSettingController::class, 'store']);
Route::get('/dashboard/account', [DashboardSettingController::class, 'account']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index']);
});

/** Testing View */
Route::get('/register/success', [TestViewController::class, 'register_success']);

Auth::routes();
