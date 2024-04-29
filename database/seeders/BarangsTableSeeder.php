<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=>'Susu SGM', 'jumlah'=> 12],
            ['nama'=>'Susu Nestle', 'jumlah'=> 24],
            ['nama'=>'Super Star', 'jumlah'=> 10]
        ];
        // masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}