<?php

namespace Database\Factories;

use App\Models\Records;
use App\Models\Car;
use App\Models\Race;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordsFactory extends Factory
{
    protected $model = Records::class;

    public function definition(): array
    {
        return [
            'start_time' => $this->faker->time(),
            'finish_time' => $this->faker->time(),
            'position' => $this->faker->numberBetween(1, 10),
            'car_id' => $car->id,
            'race' => $race->id
            // 'car_id' => Car::factory(),
            // 'race_id' => Race::factory(),
        ];
    }
}
