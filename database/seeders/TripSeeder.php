<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    public function run(): void
    {
        Trip::factory(10)->create();
    }
}
