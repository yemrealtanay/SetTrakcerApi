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
        Schema::create('performance_has_dates', function (Blueprint $table) {
            $table->id('performance_has_date_id');
            $table->foreignIdFor(\App\Models\Performance::class, 'performance_id');
            $table->date('performance_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance_has_dates');
    }
};
