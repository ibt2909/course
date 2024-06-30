<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR');

        foreach (range(1, 10) as $index) {
            Teacher::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
            ]);
        }
    }

}
