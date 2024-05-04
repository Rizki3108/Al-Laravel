<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $mereks = [
            ['id'=>1,'nama_merek'=>'Toyota'],
            ['id'=>2,'nama_merek'=>'Lamborghini'],
            ['id'=>3,'nama_merek'=>'Ferrari']
        ];
        // masukkan data ke database
        DB::table('mereks')->insert($mereks);
    }
}

