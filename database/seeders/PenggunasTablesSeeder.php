<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama'=>'Muhammad AliRizki'],
            ['nama'=>'Ksatria Faikar Nasywaan'],
            ['nama'=>'Iyas Bagus Arya Putra']
        ];
        // masukkan data ke database
        DB::table('penggunas')->insert($penggunas);
    }
}