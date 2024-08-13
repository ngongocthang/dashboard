<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => fake()->image(),
            'name' => fake()->name(),
            'description' => fake()->text($maxNbChars = 50),
            'price' => fake()->randomDigit(),
            'quantity' => fake()->randomDigit(),
            'status' => fake()->randomElement(['sale', 'sold', 'regular']),
            'view' => fake()->randomDigit(),
            'category_id' => 1,
        ];
    }
}
