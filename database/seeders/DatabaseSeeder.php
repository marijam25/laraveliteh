<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PlanetaSeeder;
use Database\Seeders\GalakasijaSeeder;
use Database\Seeders\VanzemaljacSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $gal = new GalakasijaSeeder();
        $pla = new PlanetaSeeder();
        $van = new VanzemaljacSeeder();

        $gal->run();
        $pla->run();
        $van->run();
    }
}
