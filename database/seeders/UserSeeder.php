<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
      User::create(
         [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
         ],

      );
      $users = [
        /// USER KADIV DAN KASUBDIV
         ['name' => 'Cornelius Linux', 'email' => 'cornelius.linux@imtek.com', 'password' => bcrypt('kadiv')],
         ['name' => 'Muhammad Yusuf', 'email' => 'muhammad.yusuf@imtek.com', 'password' => bcrypt('kasubfrontend')],
         ['name' => 'Gilang Rama Syaputra', 'email' => 'gilang.rama@imtek.com', 'password' => bcrypt('kasubbackend')],
         ['name' => 'Virdio Samuel', 'email' => 'virdio.samuel@imtek.com', 'password' => bcrypt('kasubvvd')],
         ['name' => 'Natasya Ega Lina', 'email' => 'natasya.ega@imtek.com', 'password' => bcrypt('kasubcontentresearch')],
    
        /// USER STAFF
         ['name' => 'Muharyan Syaifullah', 'email' => 'muharyan.syaifullah@imtek.com', 'password' => bcrypt('123140045')],
         ['name' => 'Akhdan Arif Prayoga', 'email' => 'akhdan.prayoga@imtek.com', 'password' => bcrypt('122140099')],
         ['name' => 'Edu Juanda Pratama', 'email' => 'edu.pratama@imtek.com', 'password' => bcrypt('123320012')],
         ['name' => 'Machzaul Harmansyah', 'email' => 'machzaul.harmansyah@imtek.com', 'password' => bcrypt('122140172')],
         ['name' => 'Joshua Palti Sinaga', 'email' => 'joshua.sinaga@imtek.com', 'password' => bcrypt('122140141')],
         ['name' => 'Zefanya Danovanta Tarigan', 'email' => 'zefanya.tarigan@imtek.com', 'password' => bcrypt('122140101')],
         ['name' => 'Arif Rahman', 'email' => 'arif.rahman@imtek.com', 'password' => bcrypt('122140083')],
         ['name' => 'Alma Julio Isnansyah', 'email' => 'alma.isnansyah@imtek.com', 'password' => bcrypt('122140057')],
         ['name' => 'Muhammad Fadil Ataullah Rifqi', 'email' => 'fadil.rifqi@imtek.com', 'password' => bcrypt('122140205')],
         ['name' => 'Zidan Raihan', 'email' => 'zidan.raihan@imtek.com', 'password' => bcrypt('122140100')],
         ['name' => 'Stevanus Cahya Anggara', 'email' => 'stevanus.anggara@imtek.com', 'password' => bcrypt('123140038')],
         ['name' => 'Dito Rifki Irawan', 'email' => 'dito.irawan@imtek.com', 'password' => bcrypt('122140153')],
         ['name' => 'Rizki Alfariz Ramadhan', 'email' => 'rizki.ramadhan@imtek.com', 'password' => bcrypt('122140061')],
         ['name' => 'Abit Ahmad Oktarian', 'email' => 'abit.oktarian@imtek.com', 'password' => bcrypt('122450042')],
         ['name' => 'Aulia Nur Faiza', 'email' => 'aulia.faiza@imtek.com', 'password' => bcrypt('122140015')],
         ['name' => 'Achmad Ma\'rufi Siddiq', 'email' => 'achmad.siddiq@imtek.com', 'password' => bcrypt('123130048')],
         ['name' => 'Apridian Saputra', 'email' => 'apridian.saputra@imtek.com', 'password' => bcrypt('122140143')],
         ['name' => 'Dimas Dharma Wicaksono', 'email' => 'dimas.wicaksono@imtek.com', 'password' => bcrypt('122140215')],
         ['name' => 'Khusnun Nisa', 'email' => 'khusnun.nisa@imtek.com', 'password' => bcrypt('122450078')],
         ['name' => 'Muhammad Daffa Alfaritzi', 'email' => 'daffa.alfaritzi@imtek.com', 'password' => bcrypt('123230070')],
         ['name' => 'Irma Amelia Novianti', 'email' => 'irma.novianti@imtek.com', 'password' => bcrypt('122140128')],
         ['name' => 'Rahmat Aldi Nasda', 'email' => 'rahmat.nasda@imtek.com', 'password' => bcrypt('122140077')],
         ['name' => 'Chandra Budi Wijaya', 'email' => 'chandra.wijaya@imtek.com', 'password' => bcrypt('122140093')],
         ['name' => 'Nayla Shafira Roza', 'email' => 'nayla.roza@imtek.com', 'password' => bcrypt('123450017')],
         ['name' => 'Yesa Viola', 'email' => 'yesa.viola@imtek.com', 'password' => bcrypt('122140133')],
         ['name' => 'Cici Tri Fadila.As', 'email' => 'cici.fadila@imtek.com', 'password' => bcrypt('122140086')],
         ['name' => 'Sigit Harta Kurniawan', 'email' => 'sigit.kurniawan@imtek.com', 'password' => bcrypt('123140033')],
         ['name' => 'Helen Twomay Sianturi', 'email' => 'helen.sianturi@imtek.com', 'password' => bcrypt('122160004')],
         ['name' => 'Aulia Putri Sayidina', 'email' => 'aulia.sayidina@imtek.com', 'password' => bcrypt('122140060')],
         ['name' => 'Silva Oktaria Putri', 'email' => 'silva.putri@imtek.com', 'password' => bcrypt('122140085')],
         ['name' => 'Ayu Jananti Ali Putri', 'email' => 'ayu.putri@imtek.com', 'password' => bcrypt('122140011')],
         ['name' => 'Cindy Nadila Putri', 'email' => 'cindy.putri@imtek.com', 'password' => bcrypt('122140002')],
         ['name' => 'Rachel Naulita R Gultom', 'email' => 'rachel.gultom@imtek.com', 'password' => bcrypt('122140106')],
         ['name' => 'Doni Fazarella Ananda Firma', 'email' => 'doni.firma@imtek.com', 'password' => bcrypt('122170094')]
         ];
         User::query()->insert($users);
   }
}