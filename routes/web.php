<?php

use App\Models\Question;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dd(Question::where('question_id',10)->first()->Answer);
    return view('welcome');
});
