<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_key' => $this->faker->unique()->word(),
            'title' => $this->faker->sentence(3),
            'cover' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraph(),
            'robotics_kit_id' => 1
        ];
    }
}