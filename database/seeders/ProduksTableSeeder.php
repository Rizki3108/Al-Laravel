<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=>'Celica', 'jumlah'=>4, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>1],
            ['nama_produk'=>'Supra', 'jumlah'=>6, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>1],
            ['nama_produk'=>'Civic', 'jumlah'=>8, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>1],
            ['nama_produk'=>'Veneno', 'jumlah'=>3, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>2],
            ['nama_produk'=>'Aventador', 'jumlah'=>5, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>2],
            ['nama_produk'=>'Murcielago', 'jumlah'=>7, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>2],
            ['nama_produk'=>'Spider', 'jumlah'=>2, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>3],
            ['nama_produk'=>'Stradale', 'jumlah'=>4, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>3],
            ['nama_produk'=>'Tributo', 'jumlah'=>6, 'tanggal_produksi'=>'2024-04-24', 'id_merek'=>3],
        ];
        // masukkan data ke database
        DB::table('produks')->insert($produks);
    }
}
