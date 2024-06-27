<?php

use App\Http\Controllers\Auth\JWT\JWTAuthController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // JWT auth routes
    Route::middleware('throttle:3,1')->group(function () {
        Route::post('/login', [JWTAuthController::class, 'login']);
    });

    Route::middleware('auth:api')->group(function () {
        Route::post('/logout', [JWTAuthController::class,'logout']);
        Route::get('/questions', [QuestionController::class, 'getAll']);
        Route::get('/question/{question_id}/answer/{answer_id}', [AnswerController::class, 'getAnswer']);
        Route::post('/question/{question_id}/answer/{answer_id}', [AnswerController::class, 'store']);
        Route::get('/result', [ResultController::class, 'index']);
    });
});