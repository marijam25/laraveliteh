<?php

namespace Database\Seeders;

use App\Models\Vanzemaljac;
use Illuminate\Database\Seeder;

class VanzemaljacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vanzemaljac::factory()->count(80)->create();
    }
}
