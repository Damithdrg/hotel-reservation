<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BanquestHallMenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'banquest_hall_id' => fake()->unique()->numberBetween(1, 100), 
            'menus' => fake()->unique()->numberBetween(1,6),
        ];
    }
}
