<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Episode;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => fake()->sentence(),
            'image_path' => fake()->imageUrl(),
            'duration' => fake()->numberBetween(15,72000),
            'price' => fake()->boolean(85) ? 0 :
                fake()->numberBetween(15000, 5000000)
        ];
    }
}
