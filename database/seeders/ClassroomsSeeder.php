<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $locations = Location::pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            Classroom::create([
                'location_id' => $locations[array_rand($locations)],
                'name' => 'a' . (11 - $index),
            ]);
        }
    }

}
