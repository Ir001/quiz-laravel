<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $name = $this->faker->sentence(rand(10,12));
        return [
            'slug' => Str::slug($name),
            'name' => $name,
            'price' => rand(1000,50000),
            'main_image' => $this->faker->sentence(10),
            'main_description' => $this->faker->paragraph(),
        ];
    }
}
