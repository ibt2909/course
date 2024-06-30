<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 50) as $index) {
            Student::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'phone' => $faker->phoneNumber(),
                'birthday' => $faker->date(),
                'gender' => $faker->randomElement(['male', 'female']),
            ]);
        }
    }

}
