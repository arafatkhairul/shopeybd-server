<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


// Category
Route::resource('category', CategoryController::class);
