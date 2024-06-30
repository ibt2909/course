<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Location::factory(3)->create();
        \App\Models\Classroom::factory(10)->create();
        \App\Models\Teacher::factory(10)->create();
        \App\Models\Student::factory(50)->create();
        \App\Models\Branch::factory(5)->create();
        \App\Models\Lesson::factory(50)->create();
        \App\Models\Registration::factory(100)->create();
    }
}

