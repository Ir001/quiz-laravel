<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->sentence('10'),
            'caption' => $this->faker->sentence('10'),
            'description' => $this->faker->paragraph(),
        ];
    }
}
