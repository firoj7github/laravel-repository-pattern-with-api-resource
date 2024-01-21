<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/product/create',[ProductController::class, 'apistore']);
Route::get('/products',[ProductController::class, 'getproduct']);
Route::get('/customers',[ProductController::class, 'getcustomer']);
Route::get('/countrys',[ProductController::class, 'getcountry']);


// Route::group(['middleware' => 'web'], function () {
//     Route::post('/login', [UserController::class, 'loginUser']);
// });


// Routes requiring API authentication
// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('login', [UserController::class, 'getUserDetails']);
//     Route::get('logout', [UserController::class, 'userLogout']);
// });
Route::post('login', [UserController::class, 'loginuser']);
Route::middleware('auth:api')->group(function(){
   
});
