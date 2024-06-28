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
     *  Get Result
     *
     * Endpoint untuk mengambil hasil jawaban yang terkait dengan pengguna yang diautentikasi.
     * 
     * @authenticated
     * 
     * @response 200 scenario=success
     * {
     *  "message": "Result Found",
     *  "data": {
     *      "id": 1,
     *      "user_id": 1,
     *      "tanggal_kuis": "2023-06-28 12:00:00",
     *      "sifat1_score": 2,
     *      "sifat2_score": 3,
     *      ...
     *  }
     * }
     * 
     * @response 401 scenario="Unauthorized" 
     * {
     *  "status": "Fail",
     *  "message": "Unauthorized"
     * }
     * 
     * @response 404 scenario="Invalid Data"
     * {
     *  "status": "Fail",
     *  "message": "Data not found"
     * }
     * 
     * @response 500 scenario
     * {
     *  "status": "Fail",
     *  "message": "An error occurred"
     * }
      */
    public function index()
    {
        try {
            if(!auth('api')->user()){
                throw new GeneralException('Unauthorized', 401);
            }

         $result = Result::where('user_id', auth('api')->user()->id)->first();
         if (!$result) {
            throw new GeneralException('Data not found', 404);
         }

         return new GeneralResource(200, 'Result Found', $result);
      } catch (\Exception $e) {
         throw new GeneralException($e->getMessage(), 500);
      }
   }
   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Result $result)
   {
      $id = auth('api')->user()->id;
      $result = Result::where('user_id', $id)->first();
      if ($result) {
         Result::where('user_id', $id)->delete();
         return new GeneralResource(200, 'Result deleted successfully', null);
      }
   }
}