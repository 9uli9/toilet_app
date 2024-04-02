<?php

namespace Database\Seeders;

use App\Models\Toilet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToiletSeeder extends Seeder
{
    public function run(): void
    {
        // Specify the path to your CSV file
        $csvFile = storage_path('app/public/toilets.csv');

        // Open the CSV file for reading
        $file = fopen($csvFile, 'r');

        // Read the headers from the CSV file
        $headers = fgetcsv($file);

        // Read and insert data from the CSV file
        while (($row = fgetcsv($file)) !== false) {
            $data = array_combine($headers, $row);
            Toilet::create($data);
        }

        // Close the file handle
        fclose($file);
    }
}
