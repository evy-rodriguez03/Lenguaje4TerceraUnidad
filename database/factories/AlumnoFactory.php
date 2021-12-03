<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'edad' => $this->faker->numberBetween($min = 12, $max = 70),
            'numero_identidad' => $this->faker->numerify('07##-####-######'),
            'telefono' => $this->faker->phoneNumber(), // password
            'direccion' => $this->faker->address(),
            'nombre_padre' => $this->faker->firstNameMale()." ".$this->faker->lastName(),
            'nombre_madre' => $this->faker->firstNameFemale()." ".$this->faker->lastName(),
        ];
    }
}
