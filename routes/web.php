<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/',[PublicController::class, 'home'])->name('home');
Route::get('/create',[ArticleController::class, 'create'])->name('create');
Route::get('/show/{article}',[ArticleController::class, 'show'])->name('show');





