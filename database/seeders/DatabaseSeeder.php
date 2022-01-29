<?php

namespace Database\Seeders;

use App\Models\Trading;
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
        Trading::factory(50)->create();
    }
}
