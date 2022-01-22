<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'   => mt_rand(1,30),
            'title'         => $this->faker->realText($maxNbChars = 15, $indexSize = 2),
            'description'   => $this->faker->paragraph(),
            'price'   => $this->faker->numberBetween(1200,2000)
        ];
    }
}
