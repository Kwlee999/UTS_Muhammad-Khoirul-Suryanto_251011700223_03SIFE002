<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalArtController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'about'])->name('about');
Route::get('/koleksi', [DigitalArtController::class, 'index'])->name('arts.index');
Route::get('/koleksi/{id}', [DigitalArtController::class, 'show'])->name('arts.show');