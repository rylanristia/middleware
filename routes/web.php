<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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

Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/get-product', [ProductController::class, 'getProducts']);
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::post('/update-product', [ProductController::class, 'updateProduct']);
});

Route::prefix('cashier')->middleware('cashier')->group(function () {
    Route::get('/get-users', [LoginController::class, 'getUsers']);
    Route::resource('transaction', TransactionController::class);
});