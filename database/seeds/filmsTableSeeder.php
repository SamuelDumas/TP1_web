<?php

use Illuminate\Database\Seeder;

class filmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(database_path() . '/seeds/films.sql'); 
        DB::statement($sql);
    }
}
