<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        BranchesSeeder::table('branches')->insert([
            ['name' => 'beginner'],
            ['name' => 'elementary'],
            ['name' => 'pre'],
            ['name' => 'inter'],
            ['name' => 'upper'],
        ]);
    }

}
