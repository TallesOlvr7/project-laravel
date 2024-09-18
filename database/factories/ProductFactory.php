<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name'=>fake()->unique()->word(),
            'amount'=>fake()->numberBetween(0, 30),
            'prize'=>fake()->randomFloat(2, 50, 1500)
        ];
    }
}
