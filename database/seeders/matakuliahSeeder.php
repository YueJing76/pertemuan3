<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliahs')->insert([
            'kodematakuliah' => 'SYS0001',
            'namamatakuliah'=> 'Pemrograman Aplikasi Bisnis',
            'sks'=> 4
        ]);
        DB::table('matakuliahs')->insert([
            'kodematakuliah' => 'SYS0002',
            'namamatakuliah'=> 'Audit dan Kontrol Sistem Informasi',
            'sks'=> 4
        ]);
        DB::table('matakuliahs')->insert([
            'kodematakuliah' => 'SYS0003',
            'namamatakuliah'=> 'Digital Marketing',
            'sks'=> 3
        ]);
        
        }
    }