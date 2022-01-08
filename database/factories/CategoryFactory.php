<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    
    public function definition()
    {
        $name = $this->faker->sentence(6);
        return [
            'slug' => Str::slug($name),
            'name' => $name,
            'icon' => $this->faker->sentence(10),
            'description' => $this->faker->paragraph()
        ];
    }
}
