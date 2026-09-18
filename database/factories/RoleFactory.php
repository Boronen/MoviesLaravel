<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Role> */
class RoleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'film_id' => Film::query()->inRandomOrder()->value('id'),
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'status' => fake()->randomElement(['főszereplő', 'mellékszereplő', 'epizódszereplő']),
        ];
    }
}
