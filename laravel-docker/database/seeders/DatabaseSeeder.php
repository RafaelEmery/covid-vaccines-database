<?php

namespace Database\Seeders;

use App\Models\Vacina;
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
        \App\Models\Local::factory(10)->create();
        Vacina::factory(5)->create();
    }
}
