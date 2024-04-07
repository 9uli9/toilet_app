<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsPivotTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); 
            $table->string('title')->nullable(); 
            $table->string('description')->nullable(); 
            $table->integer('rating')->nullable(); 
            $table->unsignedBigInteger('toilet_id'); 
            $table->unsignedBigInteger('user_id'); 

            // Define foreign key constraints.
            $table->foreign('toilet_id')->references('id')->on('toilets')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews'); 
    }
}
