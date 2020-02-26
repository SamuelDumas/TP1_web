<?php

use Illuminate\Database\Seeder;

class filmActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(database_path() . '/seeds/film_actor.sql'); 
        DB::statement($sql);
    }
}
