<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Gender::query()->insert([
            ['title' => 'Fiú'],
            ['title' => 'Lány'],
        ]);
        User::factory(10)->create()->each(function (User $user): void {
            $user->update(['gender_id' => Gender::query()->inRandomOrder()->value('id')]);
        });
        Film::factory(10)->create();
        Role::factory(20)->create();
    }
}
