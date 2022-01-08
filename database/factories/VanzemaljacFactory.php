<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Planeta;

class VanzemaljacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'boja' => $this->faker->colorName(),
            'visina' => $this->faker->numberBetween($min = 30, $max = 330),
            'tezina' => $this->faker->numberBetween($min = 1, $max = 1000000),
            'planeta_id' => Planeta::factory()
        ];
    }
}
