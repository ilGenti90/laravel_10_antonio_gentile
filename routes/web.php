<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

Route::get('/',[PublicController::class,'homepage'])->name('home');
Route::get('/product/prodotti',[PublicController::class,'products'])->name('product.prodotti')->middleware('auth');
Route::get('/product/magazzino',[PublicController::class,'magazzino'])->name('product.magazzino')->middleware('auth');
// SALVATAGGIO PRODOTTO IN DB
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
