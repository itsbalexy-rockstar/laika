<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Farmapet>
 */
class FarmapetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imagen' => $this->faker->imageUrl($width=300, $height=360, 'medicines'),
            'nombre' => $this->faker->word(),
            'puntaje' => $this->faker->numberBetween($min = 1, $max = 5),
            'precio' => $this->faker->numberBetween($min = 5000, $max = 300000),
        ];
    }
}
