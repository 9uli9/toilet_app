

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->enum('difficulty', ['Beginner','Intermediate','Expert']);
            $table->string('max_capacity');
            $table->date('start_date');

            $table->timestamps();
        });
    }

     
    public function down()
    {
        Schema::dropIfExists('races');
    }
};



