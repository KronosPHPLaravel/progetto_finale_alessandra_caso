<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FilmController::class, 'index'])->name('films.index'); 
Route::get('/create', [FilmController::class, 'create']) ->name('films.create'); 
Route::post('/store', [FilmController::class, 'store'])->name('films.store'); 
Route::get('/edit/{Film}', [FilmController::class, 'edit'])->name('films.edit'); 
Route::get('/show/{Film}', [FilmController::class, 'show'])->name('films.show'); 
Route::put('/update/{Film}', [FilmController::class, 'update'])->name('films.update'); 
Route::delete('/destroy/{Film}', [FilmController::class, 'destroy'])->name('films.destroy'); 
