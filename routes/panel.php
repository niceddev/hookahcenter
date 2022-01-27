<?php

use App\Http\Controllers\Panel\LoginController;
use App\Http\Controllers\Panel\PanelController;
use Illuminate\Support\Facades\Route;

// adminPanel
Route::as('panel.')->prefix('panel')->group(function(){
    Route::middleware('guest')->group(function (){
        Route::get('/', [LoginController::class, 'index'])
            ->name('login');
        Route::post('/', [LoginController::class, 'auth'])
            ->name('auth');
    });
    Route::middleware(['auth', 'panel:admin'])->group(function (){
        Route::get('/zxc', [PanelController::class, 'index']);
    });
});
