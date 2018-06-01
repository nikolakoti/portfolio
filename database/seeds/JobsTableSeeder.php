<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('jobs')->truncate();
        DB::unprepared(file_get_contents(__DIR__ . '/jobs.sql'));
    }

}
