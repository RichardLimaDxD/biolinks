<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'link' => fake()->url(),
            'name' => fake()->word()
        ];
    }
}
