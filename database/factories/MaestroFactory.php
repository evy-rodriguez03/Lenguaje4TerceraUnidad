<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaestroFactory extends Factory
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
            'numero_identidad' => $this->faker->numerify('07##-####-######'),
            'fecha_nac' => $this->faker->date(), // password
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'especialidad' => $this->faker->jobTitle(),
        ];
    }
}
