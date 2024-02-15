<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;

Route::get('/',[PublicController::class, 'home'])->name('home');
Route::get('/create',[ArticleController::class, 'create'])->name('create');
Route::get('/show/{article}',[ArticleController::class, 'show'])->name('show');
Route::get('/category/show/{category}',[CategoryController::class,'categoryShow'])->name('categoryShow');
Route::get('/index',[ArticleController::class,'index'])->name('index');




// Rotte recensioni
Route::get('/create/review/{article}',[ReviewController::class,'create'])->name('create_review');
Route::post('/store/review/{article}',[ReviewController::class,'store'])->name('store_review');


//revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accetta/annuncio/{article}', [RevisorController::class, 'acceptArticle'])->middleware('isRevisor')->name('revisor.accept_article');
Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class, 'rejectArticle'])->middleware('isRevisor')->name('revisor.reject_article');

// richiesta per diventare revisore
Route::post('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
Route::get('/request', [RevisorController::class, 'request'])->name('request');
Route::post('/request/submit', [RevisorController::class, 'submit'])->name('submit');

//ricerca annuncio
Route::get('/ricerca/annuncio', [PublicController::class, 'searchArticles'])->name('articles.search');


Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');


