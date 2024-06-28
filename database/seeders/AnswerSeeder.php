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
         // Jawaban untuk pertanyaan 1
         [
            'question_id' => 1,
            'teks_jawaban' => 'Mudah menyerah saat menghadapi rintangan dalam proses belajar di masa Tahap Persiapan Bersama (TPB)',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 1,
            'teks_jawaban' => 'Selalu mencari cara termudah dan tepat untuk menyelesaikan tugas perkuliahan',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 1,
            'teks_jawaban' => 'Memiliki ambisi untuk menjadi mahasiswa berprestasi dengan menghalalkan segala cara',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 1,
            'teks_jawaban' => 'Memiliki motivasi tinggi untuk mencapai tujuan akademiknya',
            'nilai_sifat' => 1
         ],

         // Jawaban untuk pertanyaan 2
         [
            'question_id' => 2,
            'teks_jawaban' => 'Mengerjakan tugas satu per satu',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 2,
            'teks_jawaban' => 'Mengatur jadwal kegiatan dengan teratur',
            'nilai_sifat' => 1
         ],
         [
            'question_id' => 2,
            'teks_jawaban' => 'Membuat daftar prioritas',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 2,
            'teks_jawaban' => 'Mengerjakan semua tugas secara bersamaan',
            'nilai_sifat' => 0
         ],

         // Jawaban untuk pertanyaan 3
         [
            'question_id' => 3,
            'teks_jawaban' => 'Saya akan berusaha',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 3,
            'teks_jawaban' => 'Pasrah dan tidak ada kemauan untuk berubah',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 3,
            'teks_jawaban' => 'Membangun kembali jiwa semangat dan kepemimpinannya',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 3,
            'teks_jawaban' => 'Melawan rasa malas-malasan, serta mempunyai target menjalankan kehidupan, tentunya pada perkuliahan, sehingga bisa kembali membangun semangat serta jiwa kepemimpinan',
            'nilai_sifat' => 1
         ],

         // Jawaban untuk pertanyaan 4
         [
            'question_id' => 4,
            'teks_jawaban' => 'Membangun kampus yang sama di luar negeri',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 4,
            'teks_jawaban' => 'Mengadakan seminar di kampus tentang ekonomi global',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 4,
            'teks_jawaban' => 'Menghasilkan riset yang dapat diterapkan dalam industri',
            'nilai_sifat' => 2
         ],
         [
            'question_id' => 4,
            'teks_jawaban' => 'Mengurangi biaya pendidikan',
            'nilai_sifat' => 0
         ],

         // Jawaban untuk pertanyaan 5
         [
            'question_id' => 5,
            'teks_jawaban' => 'Memberikan pelajaran sains dasar secara gratis kepada anak-anak di desa sekitar ITERA',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 5,
            'teks_jawaban' => 'Mengembangkan soft skill seperti keterampilan komunikasi, pemikiran kreatif dan kemampuan beradaptasi, serta integritas',
            'nilai_sifat' => 2
         ],
         [
            'question_id' => 5,
            'teks_jawaban' => 'Berkontribusi dalam kegiatan Tri Dharma Perguruan Tinggi khususnya pengabdian kepada masyarakat yang disponsori oleh ITERA',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 5,
            'teks_jawaban' => 'Mengikuti lomba ilmu pengetahuan sains dan teknologi',
            'nilai_sifat' => 0
         ],

         // Jawaban untuk pertanyaan 6
         [
            'question_id' => 6,
            'teks_jawaban' => 'Melakukan penelitian dan pengembangan teknologi baru yang dapat diterapkan di industri',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 6,
            'teks_jawaban' => 'Memperkuat program magang dan praktikum kerja bagi mahasiswa',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 6,
            'teks_jawaban' => 'Mengundang pakar dari industri dan komunitas untuk menjadi dosen tamu',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 6,
            'teks_jawaban' => 'Melakukan semua jawaban di atas',
            'nilai_sifat' => 2
         ],

         // Jawaban untuk pertanyaan 7
         [
            'question_id' => 7,
            'teks_jawaban' => 'Membatasi jam operasional kantin untuk mengurangi konsumsi energi',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 7,
            'teks_jawaban' => 'Mengganti semua peralatan dapur dengan yang lebih efisien secara energi',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 7,
            'teks_jawaban' => 'Memperkenalkan program daur ulang untuk pengelolaan limbah kantin',
            'nilai_sifat' => 3
         ],
         [
            'question_id' => 7,
            'teks_jawaban' => 'Menambah jumlah tempat duduk untuk mengakomodasi lebih banyak pengunjung',
            'nilai_sifat' => 0
         ],

         // Jawaban untuk pertanyaan 8
         [
            'question_id' => 8,
            'teks_jawaban' => 'Membangun gedung baru tanpa memperhatikan lingkungan sekitar',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 8,
            'teks_jawaban' => 'Mengadakan program penghijauan di area kampus',
            'nilai_sifat' => 3
         ],
         [
            'question_id' => 8,
            'teks_jawaban' => 'Mengurangi jumlah area hijau untuk pembangunan gedung baru',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 8,
            'teks_jawaban' => 'Menambah jumlah tempat parkir',
            'nilai_sifat' => 0
         ],

         // Jawaban untuk pertanyaan 9
         [
            'question_id' => 9,
            'teks_jawaban' => 'Mengurangi aktivitas praktikum',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 9,
            'teks_jawaban' => 'Meningkatkan pengawasan dan peralatan laboratorium',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 9,
            'teks_jawaban' => 'Menyediakan pelatihan keselamatan kerja dan alat pelindung diri',
            'nilai_sifat' => 3
         ],
         [
            'question_id' => 9,
            'teks_jawaban' => 'Menambah jumlah mahasiswa yang diizinkan berada di laboratorium atau area praktikum pada satu waktu',
            'nilai_sifat' => 0
         ],

         // Jawaban untuk pertanyaan 10
         [
            'question_id' => 10,
            'teks_jawaban' => 'Saya akan membuang sampah dengan tempat yang sudah disediakan',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 10,
            'teks_jawaban' => 'Saya akan bergabung untuk mengikuti kampanye program daur ulang dan bank sampah seperti IWACI (Integrated Waste and Agro Center ITERA)',
            'nilai_sifat' => 4
         ],
         [
            'question_id' => 10,
            'teks_jawaban' => 'Saya akan menyuruh tim mahasiswa peduli lingkungan untuk mengkaji masalah dan solusi potensial.',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 10,
            'teks_jawaban' => 'Saya akan mengajukan kolaborasi dengan komunitas lokal untuk mengembangkan solusi yang lebih luas dan berkelanjutan.',
            'nilai_sifat' => 0
         ],

         // Jawaban untuk pertanyaan 11
         [
            'question_id' => 11,
            'teks_jawaban' => 'Menjadi mediator sukarela dalam menyelesaikan konflik warga',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 11,
            'teks_jawaban' => 'Mengadakan diskusi komunitas tentang pentingnya perdamaian dan resolusi konflik',
            'nilai_sifat' => 0
         ],
         [
            'question_id' => 11,
            'teks_jawaban' => 'Membantu mendirikan pusat konseling untuk membantu warga yang mengalami konflik',
            'nilai_sifat' => 4
         ],
         [
            'question_id' => 11,
            'teks_jawaban' => 'Mengajarkan nilai-nilai perdamaian dan keadilan kepada anak-anak di desa.',
            'nilai_sifat' => 0
         ],
      ];
      Answer::query()->insert($Answer);
   }
}