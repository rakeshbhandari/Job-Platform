<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$10000', '$20000', '$30000', '$40000', '$50000']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['Full time', 'Part time', 'Contract']),
            'url' => fake()->url,
            'featured' => fake()->boolean,
        ];
    }
}
