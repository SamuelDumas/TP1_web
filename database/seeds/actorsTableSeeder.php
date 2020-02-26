<?php

use Illuminate\Database\Seeder;

class actorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(database_path() . '/seeds/actors.sql'); 
        DB::statement($sql);
    }
}
