<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Http\Resources\GeneralResource;
use App\Models\Answer;
use App\Http\Requests\StoreAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;
use App\Models\AnswerActivity;
use App\Models\Result;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnswerController extends Controller
{

    /**
     * Get Answer
     * 
     * 
     * @authenticated
     */
    public function getAnswer(Request $request,$question_id,$answer_id){
        try {
            $answer = Answer::where('question_id',$question_id)->where('answer_id',$answer_id)->first();
            //validate if data not found
            if(!$answer){
                throw new GeneralException('Data not found', 404);
            }
            return new GeneralResource(200, 'Answer Found', $answer);
            } catch (\Exception $e) {
            // Tangani pengecualian umum
            throw new GeneralException($e->getMessage(), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request,$question_id,$answer_id){
        //find result by user_id
        $result = Result::where('user_id', auth('api')->user()->id)->first();
        // if result not found, create new result
        DB::beginTransaction();
        try {
            if(!$result){
                $result = Result::create([
                    'user_id' => auth('api')->user()->id,
                    'tanggal_kuis' => Carbon::now(),
                ]);
            }
            //find answer by question_id and answer_id
            $answer = Answer::where('question_id',$question_id)->where('answer_id',$answer_id)->first();

         //validate if data not found
         if (!$answer) {
            throw new GeneralException('Answer not found', 404);
         }

         // Update the result based on the answer's nilai_sifat
         switch ($answer->nilai_sifat) {
            case 1:
               $result->sifat1_score += 2;
               break;
            case 2:
               $result->sifat2_score += 2;
               break;
            case 3:
               $result->sifat3_score += 2;
               break;
            case 4:
               $result->sifat4_score += 2;
               break;
            default:
             break;
         }
         $result->save();


         DB::commit();
         return new GeneralResource(201, 'Success Input Answer', [$answer->question, $result]);
      } catch (\Exception $e) {
         DB::rollBack();
         // Handle general exception
         throw new GeneralException($e->getMessage(), 500);
      }
   }
 }
