<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $primarykey = 'question_id';
    protected $fillable = 'teks_pertanyaan';
    
    public function Answer(){
        return $this->hasMany(Answer::class, 'question_id', 'question_id');
    }
}
