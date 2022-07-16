<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\marshalPost>
 */
class MarshalPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number' => $this->faker->numberBetween(1, 40),
            'lat' => $this->faker->latitude(50, 51),
            'long' => $this->faker->longitude(5, 6),
        ];
    }
}
