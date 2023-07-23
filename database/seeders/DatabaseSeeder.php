<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PackSeeder::class);
        $this->call(TripSeeder::class);
        $this->call(ItemSeeder::class);
    }
}
