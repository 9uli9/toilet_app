<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Car;
use App\Models\Race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DriverSeeder extends Seeder
{

    public function run(): void
    {

        Driver::factory()->count(5)->create();
    }

}
