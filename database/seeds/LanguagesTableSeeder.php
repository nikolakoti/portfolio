<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('languages')->truncate();
        DB::unprepared(file_get_contents(__DIR__ . '/languages.sql'));
    }

}
