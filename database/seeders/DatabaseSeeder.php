<?php

namespace Database\Seeders;

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
        //  \App\Models\User::factory(50)->create();
        //   \App\Models\Livre::factory(2)->create();
          \App\Models\Emprunt::factory(2)->create();
    }
}
