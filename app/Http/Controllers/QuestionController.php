<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralException;
use App\Http\Resources\GeneralResource;
use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //get all questions
    public function getAll()
    {
        $question = Question::all();
        //validate if data not found
        if(!$question){
            return new GeneralException('Data not found', 404);
        }
        //get all questions and answers
        foreach($question as $q){
            $question['answer'] = $q->Answer;
        }

        return new GeneralResource(200, 'Questions', $question);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
