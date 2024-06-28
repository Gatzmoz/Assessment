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
            //randomize the questions and answers
            foreach($question as $q){
                // Mengambil jawaban sebagai array
                $answers = $q->Answer->toArray();
                
                // Mengacak jawaban
                shuffle($answers);

                // Menyimpan jawaban yang sudah diacak kembali ke objek pertanyaan
                $q->setRelation('Answer', collect($answers));

            }
    
            return new GeneralResource(200, 'Questions', $question->shuffle());
        } catch (\Throwable $th) {
            throw new GeneralException($th->getMessage(), 500);
        }
    }
}
