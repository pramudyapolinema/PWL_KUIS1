<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
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
            DB::table('products')->insert([
                'nama' => $faker->sentence(3, true),
                'harga' => $faker->randomNumber(4),
                'deskripsi' => $faker->text,
                'filter' => $faker->randomElement(['des', 'dev', 'gra']),
                'foto' => $faker->numerify('https://source.unsplash.com/370x170/?product'.'###'),
                'rating' => $faker->randomFloat(1, 0, 5),
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }
    }
}
