<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' =>  1,
            'product_id' =>  1,
            'quantity' => fake()->randomDigit(),    
            'price' => fake()->randomDigit(),    
            'total_price' => fake()->randomDigit(),    
        ];
    }
}
