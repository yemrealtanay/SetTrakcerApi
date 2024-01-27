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
        Schema::create('performances', function (Blueprint $table) {
            $table->id('performance_id');
            $table->foreignIdFor(\App\Models\ProgramHasExercise::class, 'program_has_exercise_id');
            $table->foreignIdFor(\App\Models\WeightType::class, 'weight_type_id');
            $table->integer('weight');
            $table->integer('set');
            $table->integer('repetition');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performances');
    }
};
