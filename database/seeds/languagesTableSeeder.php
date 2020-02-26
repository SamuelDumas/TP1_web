<?php

use Illuminate\Database\Seeder;

class languagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(database_path() . '/seeds/languages.sql'); 
        DB::statement($sql);
    }
}
