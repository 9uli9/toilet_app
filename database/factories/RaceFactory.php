<?php

namespace Database\Factories;

use App\Models\Race;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceFactory extends Factory
{
    protected $model = Race::class;

    public function definition(): array
    {
        $suffixes = ['Grand Prix', ' Challenge', ' Showdown', ' Rally', ' Clash', ' Race'];

        $title = ucfirst($this->faker->word) . ' ' . $this->faker->randomElement($suffixes);
        

        return [
            'title' => $title,
            'location' => $this->faker->address,
            'difficulty' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Expert']),
            'max_capacity' => $this->faker->numberBetween(2, 100),
            'start_date' => $this->faker->date(),
        ];
    }
}

