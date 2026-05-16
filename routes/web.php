<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

Route::get('/',[PublicController::class,'homepage'])->name('home');
Route::get('/product',[PublicController::class,'products'])->name('products.index');
Route::get('/magazzino',[PublicController::class,'magazzino'])->name('products');
// SALVATAGGIO PRODOTTO IN DB
Route::post('/product/create', [ProductController::class, 'store'])->name('products.store');
