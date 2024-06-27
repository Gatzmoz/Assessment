<?php

use App\Enums\TokenAbility;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\JWT\JWTAuthController;
use App\Http\Resources\GeneralResource;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    // Sanctum auth routes
    Route::controller(AuthController::class)->prefix('auth')->group(function () {
        Route::middleware('throttle:3,1')->group(function ()
        {
            Route::post('/login', 'login');
        });
        
        Route::middleware('auth:sanctum', 'ability:' . TokenAbility::ISSUE_ACCESS_TOKEN->value)->group(function () {
            Route::post('/logout', 'logout');
        });
    });
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