<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::get('/',[PublicController::class, 'home'])->name('home');
Route::get('/create',[ArticleController::class, 'create'])->name('create');
Route::get('/show/{article}',[ArticleController::class, 'show'])->name('show');
Route::get('/category/show/{category}',[CategoryController::class,'categoryShow'])->name('categoryShow');
Route::get('/index',[ArticleController::class,'index'])->name('index');




// Rotte recensioni
Route::get('/create/review/{article}',[ReviewController::class,'create'])->name('create_review');
Route::post('/store/review/{article}',[ReviewController::class,'store'])->name('store_review');

