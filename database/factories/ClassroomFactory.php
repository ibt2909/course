<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    protected $model = Classroom::class;

    public function definition()
    {
        return [
            'location_id' => Location::factory(),
            'name' => $this->faker->word,
        ];
    }
};

