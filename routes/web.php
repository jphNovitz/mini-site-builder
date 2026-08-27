<?php

use Illuminate\Support\Facades\Route;

Route::get('/creer-ma-carte', [\App\Http\Controllers\BusinessCardController::class, 'create'])->name('business-card.create');
Route::post('/creer-ma-carte', [\App\Http\Controllers\BusinessCardController::class, 'store'])->name('business-card.store');
