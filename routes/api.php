<?php

use App\Http\Controllers\Auth\JWT\JWTAuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // JWT auth routes
    Route::controller(JWTAuthController::class)->prefix('auth/jwt')->group(function () {
        Route::middleware('throttle:3,1')->group(function ()
        {
            Route::post('/login', 'login');
        });
        Route::middleware('auth:api')->group(function () {
            Route::post('/logout', 'logout');
        });
    });
});