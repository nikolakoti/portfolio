<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('skills')->truncate();
        DB::unprepared(file_get_contents(__DIR__ . '/skills.sql'));
    }

}
