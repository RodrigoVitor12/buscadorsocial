<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/dashboard', function () {
    return redirect()->route('search');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/meus-favoritos', [FavoriteController::class, 'index'])->name('favorite.index');
});

require __DIR__.'/settings.php';