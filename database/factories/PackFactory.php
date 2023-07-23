<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => fn() => User::factory(),
            'name'    => $this->faker->word(),
        ];
    }
}
