<?php

namespace Database\Seeders;

use App\Models\Toilet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ToiletSeeder extends Seeder
{

    public function run(): void
    {

        Toilet::factory()->count(5)->create();

        $toilets = [
            [
                'title' => 'Milfield Shopping Center',
                'type' => 'Public',
                'description' => 'This is a public toilet located inside the shopping center.',
                'location' => 'Park Avenue, City Center',
                'accessibility' => 'Wheelchair accessible',
                'link' => 'https://example.com/public-toilet-1',
                'opening_hours' => 'Monday to Friday: 8 AM - 8 PM',
            ],
            [
                'title' => 'Private Toilet 1',
                'type' => 'Private',
                'description' => 'This is a private toilet located in a residential building.',
                'location' => '123 Main Street, Apartment Building',
                'accessibility' => 'Not wheelchair accessible',
                'link' => 'https://example.com/private-toilet-1',
                'opening_hours' => '24/7',
            ],
          
        ];

        foreach ($toilets as $toiletData) {
            Toilet::create($toiletData);
        }
    }

}
