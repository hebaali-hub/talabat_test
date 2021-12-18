<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Front\ProductController;

 use App\Http\Controllers\Api\Front\SectionController;
// use App\Http\Controllers\Api\Front\HomeController;
use Illuminate\Support\Facades\Route;


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



Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/product/create', [ProductController::class, 'create'])->name('front.product.create');
    Route::post('/section/create', [SectionController::class, 'create'])->name('front.section.create');
});
