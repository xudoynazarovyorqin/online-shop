<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [App\Http\Controllers\HomeController::class , 'product'])->name('products');
Route::get('/basket', [App\Http\Controllers\HomeController::class , 'basket'])->name('basket');
Route::post('/search', [App\Http\Controllers\HomeController::class , 'search'])->name('search');
Route::post('/add-basket/{id}', [App\Http\Controllers\HomeController::class , 'addBasket'])->name('add-basket');
