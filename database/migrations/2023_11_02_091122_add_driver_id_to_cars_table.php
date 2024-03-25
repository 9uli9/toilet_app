<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// this migration adds a foreign key relationship to the 'cars' table, 
// linking it to the 'drivers' table using the 'driver_id' column. 

// The foreign key relationship is set to cascade delete,
// meaning if a driver is deleted, the associated car records will also be deleted.

return new class extends Migration
{
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
        });
    }
    
    
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['driver_id']);
            $table->dropColumn('driver_id');
        });
    }
};
