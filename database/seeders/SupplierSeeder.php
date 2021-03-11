<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 20; $i++){
            DB::table('suppliers')->insert([
                'nama' => $faker->company,
                'alamat' => $faker->address,
                'logo' => $faker->numerify('https://source.unsplash.com/100x100/?logo'.'###')
            ]);
        }
    }
}
