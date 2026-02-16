<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'type' => fake()->randomElement([
                'billboard',
                'screen',
                'mupi',
                'wall'
            ]),
            'location' => fake()->city(),
            'dimensions' => fake()->randomElement([
                '5x3',
                '4x2',
                '6x3',
                '3x2'
            ]),
            'price_per_day' => fake()->randomFloat(2, 50, 500),
            'status' => fake()->boolean(90),
        ];
    }
}
