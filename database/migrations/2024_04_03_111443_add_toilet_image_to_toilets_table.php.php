<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('toilets', function (Blueprint $table) {
            $table->string('toilet_image')->default('toilet_cover.png');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('toilets', function (Blueprint $table) {
            $table->dropColumn('toilet_image');
        });
    }
};
