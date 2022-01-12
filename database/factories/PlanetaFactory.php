<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Galaksija;

class PlanetaFactory extends Factory
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
            'temperatura' => $this->faker->numberBetween($min = -500, $max = 500),
            'galaksija_id' => Galaksija::factory()
        ];
    }
}
