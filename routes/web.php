<?php

use App\Http\Controllers\Panel\LoginController;
use App\Http\Controllers\Panel\PanelController;
use Illuminate\Support\Facades\Route;

//Route::get('/products', [ProductController::class, 'index2'])->name('product');

Route::view('/{any}', 'app')
    ->middleware('guest')
    ->where('any', '.*');

Route::as('panel.')->prefix('panel')->group(function(){
    Route::middleware('guest')->group(function (){
        Route::get('/', [LoginController::class, 'index'])
            ->name('login');
    });
    Route::middleware('auth', 'panel')->group(function (){
        Route::get('/zxc', [PanelController::class, 'index']);
    });
});
