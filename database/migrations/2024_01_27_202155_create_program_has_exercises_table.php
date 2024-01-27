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
        Schema::create('program_has_exercises', function (Blueprint $table) {
            $table->id('program_has_exercise_id');
            $table->foreignIdFor(\App\Models\Program::class, 'program_id');
            $table->foreignIdFor(\App\Models\WeekDay::class, 'week_day_id');
            $table->foreignIdFor(\App\Models\Exercise::class, 'exercise_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_has_exercises');
    }
};
