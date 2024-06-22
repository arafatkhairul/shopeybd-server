<?php

use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\RegisterController;
use Illuminate\Support\Facades\Route;


// Register
Route::post('register', [RegisterController::class, 'register']);

// Login
Route::post('login', [LoginController::class, 'login']);

// Profile
Route::middleware('auth:sanctum')->prefix('profile')->controller(ProfileController::class)->group(function () {
    Route::post('avatar/update', 'avatarUpdate');
});
