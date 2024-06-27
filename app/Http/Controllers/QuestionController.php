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
      try {
         //code...
         $question = Question::all();
         //validate if data not found
         if (!$question) {
            throw new GeneralException('Data not found', 404);
         }
         //get all questions and answers
         foreach ($question as $q) {
            $question['answer'] = $q->Answer;
         }

         return new GeneralResource(200, 'Questions', $question);
      } catch (\Throwable $th) {
         throw new GeneralException($th->getMessage(), 500);
      }
   }
}
