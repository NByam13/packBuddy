<?php

namespace Database\Seeders;

use App\Models\Pack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackSeeder extends Seeder
{
    public function run(): void
    {
        Pack::factory(10)->create();
    }
}
