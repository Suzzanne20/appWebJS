<?php

use App\Http\Controllers\MangaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MangaController::class, 'index'])->name('manga.index');
Route::get('/create', [MangaController::class, 'create'])->name('manga.create');
Route::post('/store', [MangaController::class, 'store'])->name('manga.store');
Route::get('/edit', [MangaController::class, 'edit'])->name('manga.edit');
Route::get('/show', [MangaController::class, 'show'])->name('manga.show');
Route::get('/destroy', [MangaController::class, 'show'])->name('manga.destroy');