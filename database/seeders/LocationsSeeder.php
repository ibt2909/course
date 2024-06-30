<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['name' => 'uniwermag'],
            ['name' => 'parahat 1'],
            ['name' => 'anew'],
        ]);
    }

}
