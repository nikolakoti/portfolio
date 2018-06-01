<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('schools')->truncate();
        DB::unprepared(file_get_contents(__DIR__ . '/schools.sql'));
    }

}
