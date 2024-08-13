<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'order_date' => fake()->creditCardExpirationDateString(),
            'order_date' => fake()->dateTimeThisYear()->format('Y-m-d H:i:s'),
            'total_amount' => fake()->randomDigit(),
            'status' => fake()->randomElement(['user', 'admin']),
            'shiping_address' => fake()->address(),
        ];
    }
}
