<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = 'result';
    protected $primarykey = 'result_id';
    protected $fillables = [
        'tanggal_kuis',
        'sifat1_score',
        'sifat2_score',
        'sifat3_score',
        'sifat4_score',
    ];

}
