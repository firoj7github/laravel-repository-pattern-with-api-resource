<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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




Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/create',[ProductController::class, 'createPage'])->name('product.createPage');
Route::post('/product/create',[ProductController::class, 'store'])->name('product.store');
