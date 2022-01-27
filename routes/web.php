<?php

use App\Http\Controllers\Panel\LoginController;
use App\Http\Controllers\Panel\PanelController;
use Illuminate\Support\Facades\Route;

//Route::get('/products', [ProductController::class, 'index2'])->name('product');

Route::view('/{any}', 'app')
    ->where('any', '.*');
