<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Category
Route::resource('category', CategoryController::class);

// Product
Route::resource('product', ProductController::class);
