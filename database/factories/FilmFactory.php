<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Film> */
class FilmFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake('hu_HU')->sentence(3),
            'year' => fake()->numberBetween(1950, 2026),
            'minutes' => fake()->numberBetween(80, 180),
            'director_id' => User::query()->inRandomOrder()->value('id'),
        ];
    }
}
