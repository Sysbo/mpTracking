<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date_start' => $this->faker->dateTimeThisMonth(),
            'date_end' => $this->faker->dateTimeThisMonth('+3 days'),
            'name' => $this->faker->sentence(2)
        ];
    }
}
