<?php

namespace Database\Seeders;

use App\Models\SeccionesAbiertas;
use Illuminate\Database\Seeder;

class SeccionesAbiertasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeccionesAbiertas::factory(50)->create();
    }
}
