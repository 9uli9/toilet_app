<?php

namespace Database\Factories;

use App\Models\Toilet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ToiletFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), 
            'type' => Arr::random(['Public', 'Private']), 
            'description' => $this->faker->sentence() . ' A perfect blend of style and performance. The powerful engine delivers an exhilarating ride.',
            'location' => $this->faker->address(), 
            'accessibility' => $this->faker->sentence(),
            'link' => $this->faker->url(), 
            'opening_hours' => $this->faker->sentence(), 
        ];
    }
}
