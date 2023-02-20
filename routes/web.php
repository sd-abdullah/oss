<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomizeController;

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

Route::controller(CustomizeController::class)->group(function(){
    Route::get('/language/{locale}','localDeterminition');
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('/','index');
    Route::get('/categories/create','create');
    Route::post('/categories','store');
    Route::get('/categories/{category}','show');
    Route::get('/categories/{category}/edit','edit');
    Route::put('/categories/{category}','update');
    Route::delete('/categories/{category}','destroy');
});


Route::controller(ProductController::class)->group(function(){
    Route::get('/products','index');
    Route::get('/products/create','create');
    Route::post('/products','store');
    Route::get('/products/{product}','show');
    Route::get('/products/{product}/edit','edit');
    Route::put('/products/{product}','update');
    Route::delete('/products/{product}','destroy');
});
