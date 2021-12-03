<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */
    public function definition()
    {
        return [
            'seccion' => $this->faker->word(),
            'grado' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}