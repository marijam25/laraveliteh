<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planeta;

class PlanetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Planeta::factory()->count(50)->create();
    }
}
