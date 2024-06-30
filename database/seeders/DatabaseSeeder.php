<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
