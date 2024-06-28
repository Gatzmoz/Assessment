<?php

namespace App\Http\Controllers;


use App\Http\Resources\GeneralResource;
use Illuminate\Http\Request;
use App\Exceptions\GeneralException;
use App\Models\Result;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;

class ResultController extends Controller
{

    /**
     * Get Result
     * 
     * @authenticated
     */
    public function index()
    {
        try {
            if(!auth('api')->user()){
                throw new GeneralException('Unauthorized', 401);
            }

            $result = Result::where('user_id', auth('api')->user()->id)->first();
            if(!$result){
                throw new GeneralException('Data not found', 404);
            }

            return new GeneralResource(200, 'Result Found', $result);
        } catch (\Exception $e) {
            throw new GeneralException($e->getMessage(), 500);
        }
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
    public function store(StoreResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResultRequest $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
