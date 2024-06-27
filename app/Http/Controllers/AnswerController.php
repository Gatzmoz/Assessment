<?php

namespace App\Http\Controllers;


use App\Exceptions\GeneralException;
use App\Http\Resources\GeneralResource;
use App\Models\Answer;
use App\Http\Requests\StoreAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;
use App\Models\Result;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class AnswerController extends Controller
{

    //get answer by question_id and answer_id
    public function getAnswer(Request $request,$question_id,$answer_id){
        $answer = Answer::where('question_id',$question_id)->where('answer_id',$answer_id)->first();
        //validate if data not found
        if(!$answer){
            return new GeneralException('Data not found', 404);
        }
        return new GeneralResource(200, 'Answer Found', $answer);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request,$question_id,$answer_id){
        // dummy user
        // $result = Result::create([
        //     'user_id' => 1,
        //     'tanggal_kuis' => Carbon::now(),
        // ]);
        $result = Result::where('user_id' , 1)->first();
        $answer = Answer::where('question_id',$question_id)->where('answer_id',$answer_id)->first();
        //validate if data not found
        if(!$answer){
            return new GeneralException('Data not found', 404);
        }
        switch ($answer->nilai_sifat) {
            case 1:
                $result->sifat1_score +=1;
                break;
            case 2:
                $result->sifat2_score +=1;
                break;
            case 3:
                $result->sifat3_score +=1;
                break;
            case 4:
                $result->sifat4_score +=1;
                break;
        }
        $result->save();
        return new GeneralResource(201, 'Success Input Answer', [$answer->Question,$result]);
    }

    /**
     * Display the specified resource.
     */

    public function show(Answer $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Answer $jawaban)

    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateAnswerRequest $request, Answer $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Answer $jawaban)
    {
        //
    }
}
