<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Accesorio::factory(20)->create();
        \App\Models\Alimento::factory(20)->create();
        \App\Models\Cuidado::factory(20)->create();
        \App\Models\Farmapet::factory(20)->create();
        \App\Models\Juguete::factory(20)->create();
        \App\Models\Snack::factory(20)->create();
    }
}
