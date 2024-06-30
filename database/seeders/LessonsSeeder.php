<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call(LocationsSeeder::class);
        $this->call(ClassroomsSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(BranchesSeeder::class);
        $this->call(LessonsSeeder::class);
    }
}
