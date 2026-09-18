<?php

namespace Database\Factories;

use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Gender> */
class GenderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake('hu_HU')->randomElement(['Fiú', 'Lány']),
        ];
    }
}
