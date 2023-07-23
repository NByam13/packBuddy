<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $this->createAdminUser();
        User::factory(9)->create();
    }

    private function createAdminUser(): void
    {
        User::factory()->create([
            'email' => config('admin.credentials.email'),
            'password' => config('admin.credentials.password')
        ]);
    }
}
