<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galaksija;

class GalakasijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galaksija::factory()->count(35)->create();
    }
}
