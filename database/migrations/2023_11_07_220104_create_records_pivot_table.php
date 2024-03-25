<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsPivotTable extends Migration
{
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID for the pivot table.
            $table->string('start_time')->nullable(); // Column to store the start time.
            $table->string('finish_time')->nullable(); // Column to store the finish time.
            $table->integer('position')->nullable(); // Column to store the position, which can be nullable.
            $table->unsignedBigInteger('car_id'); // Foreign key referencing 'id' in the 'cars' table.
            $table->unsignedBigInteger('race_id'); // Foreign key referencing 'id' in the 'races' table.

            // Define foreign key constraints.
            $table->foreign('car_id')->references('id')->on('cars')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('race_id')->references('id')->on('races')->onUpdate('cascade')->onDelete('restrict');

            $table->timestamps(); // Automatically manage 'created_at' and 'updated_at' timestamps.
        });
    }

    public function down()
    {
        Schema::dropIfExists('records'); // Drop the 'car_race' table.
    }
}
