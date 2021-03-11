<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PelangganSeeder extends Seeder
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
            $date =$faker->dateTime;
            DB::table('pelanggans')->insert([
                'nama' => $faker->name,
                'pekerjaan' => $faker->jobTitle,
                'alamat' => $faker->address,
                'umur' => $faker->randomNumber(2),
                'foto' => $faker->numerify('https://source.unsplash.com/370x260/?face'.'###'),
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }
    }
}
