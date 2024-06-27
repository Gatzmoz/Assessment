<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Answer = [
            // Jawaban untuk pertanyaan 1: "Apa warna daun di musim gugur?"
            [
                'question_id' => 1,
                'teks_jawaban' => 'Merah',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 1,
                'teks_jawaban' => 'Kuning',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 1,
                'teks_jawaban' => 'Cokelat',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 1,
                'teks_jawaban' => 'Orange',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 2: "Siapa penemu bola lampu?"
            [
                'question_id' => 2,
                'teks_jawaban' => 'Thomas Edison',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 2,
                'teks_jawaban' => 'Nikola Tesla',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 2,
                'teks_jawaban' => 'Joseph Swan',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 2,
                'teks_jawaban' => 'Alexander Lodygin',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 3: "Apa yang dimaksud dengan gravitasi?"
            [
                'question_id' => 3,
                'teks_jawaban' => 'Gaya tarik menarik antara dua benda yang memiliki massa',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 3,
                'teks_jawaban' => 'Gaya yang menyebabkan benda jatuh ke bumi',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 3,
                'teks_jawaban' => 'Gaya yang mempertahankan orbit planet',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 3,
                'teks_jawaban' => 'Gaya yang dipelajari dalam fisika klasik',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 4: "Dimana letak Taj Mahal?"
            [
                'question_id' => 4,
                'teks_jawaban' => 'India',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 4,
                'teks_jawaban' => 'Agra',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 4,
                'teks_jawaban' => 'Uttar Pradesh',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 4,
                'teks_jawaban' => 'Di tepi sungai Yamuna',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 5: "Apa fungsi utama jantung?"
            [
                'question_id' => 5,
                'teks_jawaban' => 'Memompa darah ke seluruh tubuh',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 5,
                'teks_jawaban' => 'Mengatur aliran darah',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 5,
                'teks_jawaban' => 'Mendistribusikan oksigen ke jaringan',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 5,
                'teks_jawaban' => 'Mengangkut nutrisi ke seluruh tubuh',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 6: "Apa itu fotosintesis?"
            [
                'question_id' => 6,
                'teks_jawaban' => 'Proses dimana tanaman mengubah cahaya matahari menjadi energi',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 6,
                'teks_jawaban' => 'Proses penguapan air dari daun tanaman',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 6,
                'teks_jawaban' => 'Proses penyimpanan energi dalam bentuk glukosa',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 6,
                'teks_jawaban' => 'Proses yang terjadi di kloroplas',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 7: "Siapa penulis buku 'Laskar Pelangi'?"
            [
                'question_id' => 7,
                'teks_jawaban' => 'Andrea Hirata',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 7,
                'teks_jawaban' => 'Pramoedya Ananta Toer',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 7,
                'teks_jawaban' => 'Habiburrahman El Shirazy',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 7,
                'teks_jawaban' => 'Tere Liye',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 8: "Sebutkan ibu kota negara Kanada!"
            [
                'question_id' => 8,
                'teks_jawaban' => 'Ottawa',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 8,
                'teks_jawaban' => 'Toronto',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 8,
                'teks_jawaban' => 'Vancouver',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 8,
                'teks_jawaban' => 'Montreal',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 9: "Apa hukum Newton yang ketiga?"
            [
                'question_id' => 9,
                'teks_jawaban' => 'Untuk setiap aksi, ada reaksi yang sama besar dan berlawanan arah',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 9,
                'teks_jawaban' => 'Gaya gravitasi adalah fungsi massa dan jarak',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 9,
                'teks_jawaban' => 'Setiap benda akan tetap dalam keadaan diam atau bergerak lurus beraturan kecuali ada gaya yang bekerja',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 9,
                'teks_jawaban' => 'Gaya berbanding lurus dengan percepatan',
                'nilai_sifat' => 4
            ],

            // Jawaban untuk pertanyaan 10: "Apa itu bilangan prima?"
            [
                'question_id' => 10,
                'teks_jawaban' => 'Bilangan yang hanya memiliki dua faktor yaitu 1 dan dirinya sendiri',
                'nilai_sifat' => 1
            ],
            [
                'question_id' => 10,
                'teks_jawaban' => 'Bilangan yang dapat dibagi oleh lebih dari dua bilangan',
                'nilai_sifat' => 2
            ],
            [
                'question_id' => 10,
                'teks_jawaban' => 'Bilangan yang merupakan hasil kali dari dua bilangan lainnya',
                'nilai_sifat' => 3
            ],
            [
                'question_id' => 10,
                'teks_jawaban' => 'Bilangan yang hanya dapat dibagi oleh 1 dan dirinya sendiri',
                'nilai_sifat' => 4
            ],
        ];
        Answer::query()->insert($Answer);
    }
}
