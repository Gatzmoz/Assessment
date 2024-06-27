<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Question = [
            [
                'teks_pertanyaan' => 'Apa warna daun di musim gugur?'
            ],
            [
                'teks_pertanyaan' => 'Siapa penemu bola lampu?'
            ],
            [
                'teks_pertanyaan' => 'Apa yang dimaksud dengan gravitasi?'
            ],
            [
                'teks_pertanyaan' => 'Dimana letak Taj Mahal?'
            ],
            [
                'teks_pertanyaan' => 'Apa fungsi utama jantung?'
            ],
            [
                'teks_pertanyaan' => 'Apa itu fotosintesis?'
            ],
            [
                'teks_pertanyaan' => 'Siapa penulis buku "Laskar Pelangi"?'
            ],
            [
                'teks_pertanyaan' => 'Sebutkan ibu kota negara Kanada!'
            ],
            [
                'teks_pertanyaan' => 'Apa hukum Newton yang ketiga?'
            ],
            [
                'teks_pertanyaan' => 'Apa itu bilangan prima?'
            ],
        ];
        Question::query()->insert($Question);
    }
}
