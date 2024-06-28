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
    * Display a listing of the resource.
    */
   public function index()
   {
      try {
         if (!auth('api')->user()) {
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