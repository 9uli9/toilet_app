<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\Toilet;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get random user and toilet IDs
        $userIds = User::pluck('id')->toArray();
        $toiletIds = Toilet::pluck('id')->toArray();

        // Generate dummy reviews
        foreach (range(1, 20) as $index) {
            Review::create([
                'title' => 'Review Title ' . $index,
                'description' => 'This is a Review for a toilet. Toilet was in accessible condition but would love to have more amentities inside.',
                'rating' => rand(1, 5),
                'toilet_id' => $toiletIds[array_rand($toiletIds)],
                'user_id' => $userIds[array_rand($userIds)],
            ]);
        }
    }
}
