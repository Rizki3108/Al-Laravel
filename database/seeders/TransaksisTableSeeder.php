<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id'=> 1, 'id_barang'=> 1, 'id_pembeli'=> 1, 'jumlah'=>1, 'tanggal'=>'2024-04-03'],
            ['id'=> 2, 'id_barang'=> 2, 'id_pembeli'=> 2, 'jumlah'=>1, 'tanggal'=>'2024-04-03'],
            ['id'=> 3, 'id_barang'=> 3, 'id_pembeli'=> 3, 'jumlah'=>2, 'tanggal'=>'2024-04-03'],
            ['id'=> 4, 'id_barang'=> 3, 'id_pembeli'=> 3, 'jumlah'=>2, 'tanggal'=>'2024-04-03'],
            ['id'=> 5, 'id_barang'=> 2, 'id_pembeli'=> 2, 'jumlah'=>1, 'tanggal'=>'2024-04-03'],
            ['id'=> 6, 'id_barang'=> 1, 'id_pembeli'=> 1, 'jumlah'=>1, 'tanggal'=>'2024-04-03']
        ];

        DB::table('transaksis')->insert($transaksis);
    }
}
