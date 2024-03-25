<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;


// The CarFactory generates fake data for the Car model.
// Allowing myself to easily create test data or seed a database with realistic-looking information for cars.

// It associates each car with a newly created driver by using the Driver::factory()->create()->id method.

class CarFactory extends Factory
{

    public function definition(): array
    {
        return [
            'colour' => $this->faker->randomElement(['Red', 'Blue', 'Green', 'Black', 'White', 'Silver', 'Gray', 'Yellow', 'Orange', 'Purple', 'Brown', 'Cyan', 'Magenta', 'Beige', 'Turquoise', 'Indigo', 'Teal', 'Olive', 'Pink', 'Lavender']), 
            'fuel' => $this->faker->randomElement(['Gasoline', 'Diesel', 'Electric', 'Water', 'Solar']),
            'manufacturer' => $this->faker->randomElement(['Toyota', 'Ford', 'Honda', 'Chevrolet', 'BMW', 'Mercedes-Benz', 'Audi', 'Volkswagen', 'Tesla', 'Nissan', 'Subaru', 'Hyundai', 'Kia', 'Mazda', 'Lexus', 'Jeep', 'Chrysler', 'Volvo', 'Jaguar', 'Land Rover']),
            'model' => $this->faker->randomElement(['Turbo Thrust', 'Velocity Vibe', 'Electro Buzz', 'Galactic Glide', 'Mystic Marvel', 'Adventure Ace', 'Sunbeam Sprint', 'Dreamy Dazzle', 'Lunar Lively', 'Whizbang Wonder', 'Stellar Spark', 'Cosmic Cruiser', 'Velocity Vapor', 'Joyride Jolt', 'Epic Elation', 'Fiesta Frenzy', 'Gleam Gleeful', 'Blast Burst', 'Zephyr Zing', 'Vivid Velocity']),
            'type' => $this->faker->randomElement(['Sedan', 'SUV', 'Truck', 'Sports Car', 'Convertible', 'Coupe', 'Wagon', 'Hatchback', 'Minivan', 'Van', 'Crossover', 'Compact Car', 'Electric Car', 'Hybrid', 'Luxury Car', 'Off-road Vehicle', 'Pickup Truck', 'Commercial Vehicle', 'Race Car', 'Vintage Car', 'Exotic Car']),
            'vin' => $this->faker->unique()->isbn10,
            'vrm' => $this->faker->regexify('[A-Z]{2}[0-9]{2} [A-Z]{3}'), 
            'description' => $this->faker->sentence() . ' Combining elegance with powerful performance, this car promises an unforgettable driving experience.',
            'driver_id' => Driver::factory()->create()->id, 
        ];
    }
}
