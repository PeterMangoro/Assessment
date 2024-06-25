<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(2, false),
            'detail' => fake()->sentence(),
            'price' => fake()->numberBetween(10000, 1000000),
            'highlight'=> fake()->randomElement([true, false])
        ];
    }
}
