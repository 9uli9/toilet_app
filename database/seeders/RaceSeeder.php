<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\Car;
use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{

    public function run(): void
    {
        Race::factory()->count(5)->create();
    }
}
