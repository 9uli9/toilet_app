<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToiletsTable extends Migration
{
    public function up(): void
    {
        Schema::create('toilets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['Public','Private']);
            $table->string('description');
            $table->string('location');
            $table->string('accessibility');
            $table->string('link');
            $table->string('opening_hours');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('toilets');
    }
}
