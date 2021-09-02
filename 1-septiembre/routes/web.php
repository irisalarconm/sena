<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Contollers\CompanyController;

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


Route::get('products',[ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}',[ProductController::class, 'show'])->name('products.show');
Route::get('products/{id}/edit',[ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}',[ProductController::class, 'update'])->name('products.update');
Route::get('products/create/holi', [ProductController::class, 'create'])->name('products.create');
Route::post('product', [ProductController::class, 'store'])->name('products.store');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');