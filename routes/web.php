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

Route::get('/language/{locale}',[CustomizeController::class, 'localDeterminition']) -> name('language');


Route::get('/',[CategoryController::class, 'index']);

Route::group(['prefix' => 'categories', 'as' => 'categories.', 'controller' => CategoryController::class ], function(){
        Route::get('/','index') -> name('index');
        Route::get('/create','create') -> name('create');
        Route::post('/','store') -> name('store');
        Route::get('/{category}','show') -> name('show');
        Route::get('/{category}/edit','edit') -> name('edit');
        Route::put('/{category}','update') -> name('update');
        Route::delete('/{category}','destroy') -> name('destroy');
});



Route::group(['prefix' => 'products', 'as' => 'products.', 'controller' => ProductController::class], function(){
        Route::get('/','index') -> name('index');
        Route::get('/create','create') -> name('create');
        Route::post('/','store') -> name('store');
        Route::get('/{product}','show') -> name('show');
        Route::get('/{product}/edit','edit') -> name('edit');
        Route::put('/{product}','update') -> name('update');
        Route::delete('/{product}','destroy') -> name('destroy');
});
