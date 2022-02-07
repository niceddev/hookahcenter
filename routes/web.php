<?php

use App\Http\Controllers\Api\v1\ProductController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [ProductController::class, 'index2']);

Route::view('/{products?}', 'app');
