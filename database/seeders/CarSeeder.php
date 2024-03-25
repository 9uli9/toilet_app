<?php
namespace Database\Seeders;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Race;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// The CarSeeder class is responsible for seeding the Car table with 10 fake records by referencoing the CarFactory.

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::factory()->count(10)->create();
    }
}
