<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::get('/questions', [QuestionController::class, 'getAll']);
    Route::get('/question/{question_id}/answer/{answer_id}', [AnswerController::class, 'getAnswer']);
    Route::post('/question/{question_id}/answer/{answer_id}', [AnswerController::class, 'store']);
    Route::get('/result', [ResultController::class, 'index']);
});
