<?php

namespace Database\Factories;

use App\Models\Grado;
use App\Models\Maestro;
use Database\Seeders\MaestroSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeccionesAbiertasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_maestros' => Maestro::all()->random()->id,
            'id_grado' => Grado::all()->random()->numero_aula,
            'fecha' => $this->faker->date(),
        ];
    }
}
