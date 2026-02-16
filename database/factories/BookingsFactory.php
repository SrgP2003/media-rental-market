<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Media;
use App\Models\Customer; //Necesario para relacionar reservas con clientes

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookings>
 */
class BookingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = fake()->dateTimeBetween('now', '+1 month');
        $end = (clone $start)->modify('+' . rand(1, 10) . ' days');

        return [
            'media_id' => Media::inRandomOrder()->first()->id,
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'starts_at' => $start,
            'ends_at' => $end,
            'total_price' => fake()->randomFloat(2, 100, 5000),
            'status' => fake()->randomElement([
                'pending',
                'confirmed',
                'cancelled'
            ]),
        ];
    }
}
