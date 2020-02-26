<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(actorsTableSeeder::class);
         $this->call(filmActorTableSeeder::class);
         $this->call(filmsTableSeeder::class);
         $this->call(languagesTableSeeder::class);
    }
}
