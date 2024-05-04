<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['id'=>1 ,'nama_pembeli'=>'Muhammad AliRizki', 'jenis_kelamin'=> 'Laki-laki'],
            ['id'=>2 ,'nama_pembeli'=>'Ksatria Faikar Nasywaan', 'jenis_kelamin'=> 'Laki-laki'],
            ['id'=>3 ,'nama_pembeli'=>'Iyas Bagus Arya Putra', 'jenis_kelamin'=> 'Laki-laki']
        ];
        // masukkan data ke database
        DB::table('pembelis')->insert($pembelis);
    }
}
