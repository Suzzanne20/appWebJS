<?php

use App\Http\Controllers\MangaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MangaController::class, 'index'])->name('manga.index');
Route::get('/create', [MangaController::class, 'create'])->name('manga.create');
Route::post('/store', [MangaController::class, 'store'])->name('manga.store');
Route::get('/edit{id}', [MangaController::class, 'edit'])->name('manga.edit');
Route::put('/update{id}', [MangaController::class, 'update'])->name('manga.update');
Route::get('/show', [MangaController::class, 'show'])->name('manga.show');
Route::get('/eli{id}', [MangaController::class, 'eli'])->name('manga.eli');
Route::delete('/destroy{id}', [MangaController::class, 'destroy'])->name('manga.destroy');