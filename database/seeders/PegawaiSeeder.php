<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for($i = 0; $i < 100; $i++){
            DB::table('pegawais')->insert([
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'alamat' => $faker->address,
                'foto' => $faker->numerify('https://source.unsplash.com/370x260/?face'.'###')
            ]);
        }
    }
}
