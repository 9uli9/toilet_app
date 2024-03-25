<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// This migration adds a new column 'car_image' to the existing 'cars' table. 
// The column is intended to store filenames of car images, and the default value is set to 'car_cover.png'. 

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('car_image')->default('car_cover.png');
        });
    }

  
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('car_image');
        });
    }
};
