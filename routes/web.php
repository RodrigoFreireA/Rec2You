<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnuncioController;

Route::middleware(['web'])->group(function () {
    Route::get('/anuncios/create', [AnuncioController::class, 'create'])->name('anuncios.create');
    Route::get('/', [AnuncioController::class, 'index'])->name('anuncios.index');
    Route::get('/anuncios/{id}', [AnuncioController::class, 'show'])->name('anuncios.show');    
    Route::post('/anuncios', [AnuncioController::class, 'store'])->name('anuncios.store');
});
