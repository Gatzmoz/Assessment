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
     * Get All Questions
     *
     * Endpoint untuk mengambil semua pertanyaan beserta jawabannya.
     *
     * @authenticated
     * 
     * @response 200 scenario=success 
     * {
     *   "message": "Questions",
     *   "data": [
     *     {
     *       "id": 1,
     *       "question": "Sample Question 1",
     *       "answer": "Sample Answer 1"
     *     },
     *     {
     *       "id": 2,
     *       "question": "Sample Question 2",
     *       "answer": "Sample Answer 2"
     *     },
     *     ...
     *   ]
     *  }
     *
     * @response 404 scenario="Invalid Data"
     * {
     *   "message": "Data not found",
     *   "data": null
     * }
     *
     * @response 500 scenario
     * {
     *   "message": "Internal Server Error",
     *   "data": null
     * }
     *
     */

    //get all questions
    public function getAll()
    {
        try {
            //code...
            $question = Question::all();
            //validate if data not found
            if(!$question){
                throw new GeneralException('Data not found', 404);
            }
            //get all questions and answers
            foreach($question as $q){
                $question['answer'] = $q->Answer;
            }
    
            return new GeneralResource(200, 'Questions', $question);
        } catch (\Throwable $th) {
            throw new GeneralException($th->getMessage(), 500);
        }
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
