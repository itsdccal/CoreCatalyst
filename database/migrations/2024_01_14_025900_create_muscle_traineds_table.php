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
        Schema::create('muscle_traineds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id');
            $table->foreignId('primaryMuscleTrained');
            $table->foreignId('secondaryMuscleTrained')->nullable();
            $table->foreignId('tertiaryMuscleTrained')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('muscle_traineds');
    }
};
