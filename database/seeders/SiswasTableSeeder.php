<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=>'Muhammad AliRizki', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Perum BMI', 'agama'=>'Islam', 'telepon'=>'098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Ksatria Faikar Nasywaan', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Disitu', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Iyas Bagus Arya Putra', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Disana', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Rafly Aditya Ray', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Dimana', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Robby Apriansyah', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Mana', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Siti Nur Aliifah Mutmainnah', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Itu', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Kiara Danisha Laksmi', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Dimari', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Jelita Eka Fadillah', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Kesana', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Cindy Sagita Sari', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Kemari', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com'],
            ['nama'=>'Nazwa Amelia Lestari', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Yaudah sih', 'agama'=>'Islam', 'telepon'=> '098049732343', 'email'=>'example@gmail.com']
        ];
        // masukkan data ke database
        DB::table('siswas')->insert($siswas);
    }
}
