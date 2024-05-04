<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['id'=> 1, 'nama_barang2s'=>'Toyota Supra', 'harga'=> 5000000, 'stok'=> 5],
            ['id'=> 2, 'nama_barang2s'=>'Porsche', 'harga'=> 500000, 'stok'=> 5],
            ['id'=> 3, 'nama_barang2s'=>'Fixie', 'harga'=> 500000, 'stok'=> 5]
        ];
        // masukkan data ke database
        DB::table('barang2s')->insert($barang2s);
    }
}
