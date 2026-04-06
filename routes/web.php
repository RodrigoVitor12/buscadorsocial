<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/planos', [PlanController::class, 'index'])->name('plan.index');
Route::get('/plan/{plan}', [PlanController::class, 'select'])->name('plan.select');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/meus-favoritos', [FavoriteController::class, 'index'])->name('favorite.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/alterar-dados/{id}', [AdminController::class, 'updateInfoUser'])->name('admin.update-info-user');
    Route::post('/admin/alterar-dados/', [AdminController::class, 'update'])->name('admin.update-info-user-post');
});

require __DIR__.'/settings.php';