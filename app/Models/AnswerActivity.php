<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerActivity extends Model
{
   use HasFactory;
   protected $table = 'answer_activities';
   protected $fillable = ['user_id', 'question_id'];

   public function user()
   {
      return $this->belongsTo(User::class, 'user_id');
   }
}