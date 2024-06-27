<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';
    protected $primarykey = 'answer_id';
    protected $fillables = [
        'nilai_sifat',
        'teks_jawaban'
    ];
    public function Question(){
        return $this->hasOne(Question::class, 'question_id', 'question_id');
    }

}
