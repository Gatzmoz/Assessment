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
            'teks_pertanyaan' => 'Sebagai mahasiswa baru ITERA yang memiliki jiwa semangat dan dedikasi yang tinggi dalam mengawali perjalanan pendidikannya maka seharusnya memiliki sifat dan tingkah laku?'
         ],
         [
            'teks_pertanyaan' => 'Kamu adalah seorang mahasiswa yang cerdas, namun belakangan ini nilaimu menurun. Kamu kesulitan membagi waktu antara kegiatan kuliah dan juga organisasi kampus. Bagaimana cara kamu menyikapi hal tersebut?'
         ],
         [
            'teks_pertanyaan' => 'Anda adalah mahasiswa itera yang memiliki semangat dalam berkembang, dan menjalankan sesuatu hal baru, serta memiliki jiwa kepemimpinan yang tinggi,  namun belakangan ini semangat anda dalam berkembang menurun serta jiwa kepemimpinan anda pun menurun, sehingga akan berdampak dalam dunia perkuliahan anda. sebagai mahasiswa baru sikap seperti apa yang anda lakukan untuk mengatasi hal tersebut. '
         ],
         [
            'teks_pertanyaan' => 'ITERA telah menunjukkan kontribusi nyata dalam pembangunan ekonomi melalui penelitian yang aplikatif. Sebagai contoh, pusat penelitian energi terbarukan di ITERA berhasil mengembangkan teknologi panel surya yang lebih efisien. Hasil penelitian ini kemudian diadopsi oleh beberapa perusahaan energi, yang tidak hanya meningkatkan produksi energi bersih tetapi juga menciptakan lapangan kerja baru di sektor teknologi hijau. Inovasi ini menunjukkan bagaimana penelitian perguruan tinggi dapat memberikan solusi praktis yang berkontribusi langsung pada perkembangan industri dan ekonomi secara keseluruhan. Perguruan tinggi dapat berkontribusi pada pembangunan ekonomi dengan cara…'
         ],
         [
            'teks_pertanyaan' => 'Anda adalah mahasiswa baru di Institut Teknologi Sumatera (ITERA) yang terkenal dengan fokusnya pada ilmu pengetahuan sains dan teknologi. Di awal perkuliahan, Anda telah mengikuti seminar tentang peran penting perguruan tinggi dalam pembangunan ekonomi di era Industri 4.0 dan Society 5.0. Sebagai mahasiswa baru ITERA, bagaimana cara membantu mewujudkan pembangunan ekonomi ini?'
         ],
         [
            'teks_pertanyaan' => 'Salah satu langkah yang dilakukan ITERA adalah dengan meluncurkan program "Kolaborasi Cerdas ITERA untuk Negeri". Program ini bertujuan untuk membangun kolaborasi antara ITERA dengan berbagai pihak, seperti industri, pemerintah, dan komunitas dalam rangka mengembangkan sumber daya manusia yang unggul dan berdaya saing. ITERA berencana untuk menyelenggarakan seminar nasional dengan tema "Peran Perguruan Tinggi dalam Membangun SDM Unggul di Era Industri 4.0 dan Masyarakat 5.0". Seminar ini diharapkan dapat menjadi wadah bagi para pemangku kepentingan untuk bertukar ide dan pengalaman dalam mengembangkan SDM yang sesuai dengan kebutuhan era ini.
               Pertanyaan:
               Bagaimana ITERA dapat memaksimalkan program "Kolaborasi Cerdas UBL untuk Negeri" dalam membangun SDM unggul di era Industri 4.0 dan Masyarakat 5.0?'
         ],
         [
            'teks_pertanyaan' => 'Kantin dan galeri ITERA merupakan pusat kuliner bagi mahasiswa, tendik maupun staf, yang berfungsi sebagai tempat untuk makan dan berinteraksi. jika kampus ITERA ingin meningkatkan keberlanjutan dalam pengelolaan kantin maupun galeri mereka tanpa melakukan renovasi fisik bagaimana langkah kampus ITERA untuk meningkatkan kualitas kantin atau galeri dengan tetap memperhatikan kenyamanan atau keseimbangan lingkungan kampus?'
         ],
         [
            'teks_pertanyaan' => ' Kampus ITERA baru saja menyelesaikan pembangunan gedung baru yang ramah lingkungan. Gedung ini dilengkapi dengan sistem ventilasi yang baik, taman di atap gedung, serta panel surya untuk menghemat energi. Selain itu, kampus juga mengadakan program daur ulang untuk seluruh mahasiswa dan staff.
Bagaimana kampus ITERA mencapai keseimbangan antara pembangunan dan pelestarian lingkungan?
'
         ],
         [
            'teks_pertanyaan' => 'Di ITERA mahasiswa dan tenaga pendidik melakukan aktivitas praktikum seperti praktikum kimia di laboratorium, tetapi di laboratorium sering mengalami beberapa insiden yang berkaitan dengan keselamatan kerja, yang di mana adanya penggunaan peralatan tidak aman atau kurang terawat, dan kurangnya penggunaan Alat Pelindung Diri (APD) oleh mahasiswa dan tenaga pendidik tersebut.

Lalu, langkah apa yang seharusnya diambil pihak ITERA untuk mengurangi risiko kecelakaan di laboratorium?
'
         ],
//          [
//             'teks_pertanyaan' => 'Jika kampus ITERA sedang menghadapi masalah pengelolaan sampah yang buruk. Sebagai mahasiswa yang peduli terhadap lingkungan dan pembangunan berkelanjutan, maka apa yang akan Anda lakukan untuk mengatasi masalah ini?
// '
//          ],
//          [
//             'teks_pertanyaan' => 'Di Desa Amanah, terjadi peningkatan kasus kekerasan dan perselisihan antarwarga. Pemerintah desa meluncurkan inisiatif "Desa Damai" yang bertujuan untuk mempromosikan perdamaian dan menyelesaikan konflik secara adil. Bagaimana Anda dapat mendukung inisiatif "Desa Damai" untuk membantu mencapai tujuan SDG nomor 16 di Desa Amanah?'
//          ],
      ];
      Question::query()->insert($Question);
   }
}