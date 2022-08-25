<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BanquestHall>
 */
class BanquestHallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'location' =>fake()->unique()->sentence(),
            'max_no_of_guest' => fake()->numberBetween(1,5),
            'reservation_date' =>fake()->dateTime(),
        ];
    }
}
