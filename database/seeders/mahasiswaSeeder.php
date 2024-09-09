<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use D8;
use Illuminate\Database\Console\Seeds\WithoutModel\Events;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++){
            \DB::table('mahasiswas')-> insert([
                'studentID' => '03000811'.$i,
                'nama' => $faker->name,
                'tahunMasuk' => '2022',
                'jurusan' => "Sistem Informasi"
            ]);
        }
    }

}
