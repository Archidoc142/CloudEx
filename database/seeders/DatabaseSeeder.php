<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AnimeSeeder::class,
            SerieSeeder::class,
            LivreSeeder::class,
            FilmSeeder::class,
            GenreSeeder::class,
            MusiqueSeeder::class,
        ]);
    }
}
