<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalaksijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->word(),
            'oznaka' => $this->faker->stateAbbr(),
            'broj_planeta' => $this->faker->numberBetween($min = 0, $max = 1000),
            'udaljenost_zemlja' => $this->faker->numberBetween($min = 1000000, $max = 1000000000)
        ];
    }
}
