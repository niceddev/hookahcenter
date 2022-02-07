<?php

use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\ProductController;
use App\Http\Controllers\Panel\SettingsController;
use Illuminate\Support\Facades\Route;

// adminPanel
Route::as('panel.')->prefix('panel')->group(function(){
    Route::middleware('guest')->group(function (){
        Route::get('/', [AuthController::class, 'index'])
            ->name('login');
        Route::post('/', [AuthController::class, 'auth'])
            ->name('auth');
    });
    Route::middleware(['auth', 'panel:admin', 'prevent-back-history'])->group(function (){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
        Route::get('/products', [ProductController::class, 'index'])->name('products');
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::view('/{any?}', 'panel.dashboard')->where('any','.*');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
