<?php

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

Route::get('/', [App\Http\Controllers\ClientController::class, 'index'])->name('welcome');
Route::get('/category/{id}', [App\Http\Controllers\ClientController::class, 'category'])->name('category');
Route::get('/products/{id}', [App\Http\Controllers\ClientController::class, 'products'])->name('products');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::post('/getSubCategory', [App\Http\Controllers\ProductController::class, 'getSubCategory'])->name('getSubCategory');
Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'create'])->name('add-product');
Route::get('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('delete-product');
Route::post('/update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update-product');
