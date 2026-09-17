<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BusinessCard\BusinessCardController;
use App\Http\Controllers\Admin\BusinessCardController as AdminBusinessCardController;
use Illuminate\Support\Facades\Route;

//  Authentication
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//  Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin/cartes', [AdminBusinessCardController::class, 'index'])->name('admin.cards.index')->middleware('auth');
Route::get('/admin/carte/{businessCard}', [AdminBusinessCardController::class, 'show'])->name('admin.cards.show')->middleware('auth');
Route::get('/admin/carte/{businessCard}/edit', [AdminBusinessCardController::class, 'edit'])->name('admin.cards.edit')->middleware('auth');
Route::post('/admin/carte/{businessCard}/update', [AdminBusinessCardController::class, 'update'])->name('admin.cards.update')->middleware('auth');
Route::post('/admin/carte/{businessCard}/approve', [AdminBusinessCardController::class, 'approve'])->name('admin.cards.approve')->middleware('auth');

//  Create card
Route::get('/creer-ma-carte', [BusinessCardController::class, 'create'])->name('business-card.create');
Route::post('/creer-ma-carte', [BusinessCardController::class, 'store'])->name('business-card.store');
