<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
//HOMEPAGE
Route::get('/',[PublicController::class,'homepage'])->name('home');
//PRODOTTI
Route::get('/product/prodotti',[PublicController::class,'products'])->name('product.prodotti')->middleware('auth');
Route::get('/product/magazzino',[PublicController::class,'magazzino'])->name('product.magazzino');
// SALVATAGGIO PRODOTTO IN DB
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');

//ARTICOLO
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
//Salvataggio articolo in DB
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');
//Modifica articolo
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');
//Eliminazione articolo
Route::delete('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');
    

