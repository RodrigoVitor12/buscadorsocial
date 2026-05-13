<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/planos', [PlanController::class, 'index'])->name('plan.index');
Route::get('/plan/{plan}', [PlanController::class, 'select'])->name('plan.select');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/buscador-social-encontra-hospedes', [BlogController::class, 'findLeads'])->name('blog.findLeads');
Route::get('/blog/economizar-otas-e-lotar-hotel', [BlogController::class, 'betterHotel'])->name('blog.betterHotel');
Route::get('/blog/jornada-do-viajante-e-hoteleiro', [BlogController::class, 'journey'])->name('blog.journey');
Route::get('/blog/atalho-inteligente-para-lotar-hotel', [BlogController::class, 'dica'])->name('blog.dica');
Route::view('/suporte', 'faq')->name('faq');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/meus-favoritos', [FavoriteController::class, 'index'])->name('favorite.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/meus-clicks', [SearchController::class, 'historyClick'])->name('search.historyClick');
    Route::get('leads', [LeadController::class, 'index'])->name('leads.index');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/alterar-dados/{id}', [AdminController::class, 'updateInfoUser'])->name('admin.update-info-user');
    Route::post('/admin/alterar-dados/', [AdminController::class, 'update'])->name('admin.update-info-user-post');
    Route::get('leads/create', [LeadController::class, 'create'])->name('leads.create');
    Route::post('leads/store', [LeadController::class, 'store'])->name('leads.store');
    Route::post('leads/delete/{id}', [LeadController::class, 'delete'])->name('leads.delete');

});

require __DIR__.'/settings.php';