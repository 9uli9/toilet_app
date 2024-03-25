<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// This migration creates a 'cars' table with specific columns to store information about cars

return new class extends Migration
{

    public function up(): void
    {

        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('colour');
            $table->string('fuel');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('type');
            $table->string('vin');
            $table->string('vrm');
            $table->string('description');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
