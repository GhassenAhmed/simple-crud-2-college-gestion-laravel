<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EdudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Edudiant::factory()
        ->count(20)
        ->create();
    }
}
