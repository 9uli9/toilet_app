<?php

namespace Database\Seeders;

use App\Models\Toilet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToiletSeeder extends Seeder
{
    public function run(): void
    {
        //  Path 
        $csvFile = storage_path('app/toilets.csv');

        // Reading CSV
        $file = fopen($csvFile, 'r');

        // Read the headers 
        $headers = fgetcsv($file);

        // Read and insert data from the CSV file
        while (($row = fgetcsv($file)) !== false) {
            $data = array_combine($headers, $row);
            Toilet::create($data);
        }
        fclose($file);
    }
}
