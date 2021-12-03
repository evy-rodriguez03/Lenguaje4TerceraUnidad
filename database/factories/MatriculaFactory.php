<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Grado;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * $table->integer('id_alumnos')->unsigned();
            $table->integer('id_grado')->unsigned();
            $table->smallInteger('anio');
            $table->string('jornada',50);
            $table->smallInteger('grupo');
     */
    public function definition()
    {
        return [
            'id_alumnos' => Alumno::all()->random()->id,
            'id_grado' => Grado::all()->random()->numero_aula,
            'anio' => $this->faker->year(),
            'jornada' => $this->faker->word(),
            'grupo' => $this->faker->numberBetween($min = 1, $max = 30),
        ];
    }
}
