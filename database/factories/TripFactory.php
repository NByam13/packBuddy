<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TripFactory extends Factory
{
    public function definition(): array
    {
        $start = Carbon::createFromTimestamp(
            $this->faker
                ->dateTimeBetween('+2 days', '+1 week')
                ->getTimeStamp()
        );

        $end = Carbon::createFromFormat(
            'Y-m-d H:i:s',
            $start
        )->addDays($this->faker->numberBetween(1, 8));

        return [
            'user_id'    => User::factory(),
            'name'       => $this->faker->word(),
            'location'   => $this->faker->city(),
            'start' => $start->toDateTimeString(),
            'end'   => $end->toDateTimeString(),
        ];
    }
}
