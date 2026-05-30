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
        Schema::create('upcoming_batches', function (Blueprint $table) {
            $table->id();
            $table->string('batch_name');
            $table->string('batch_duration');
            $table->date('batch_launch_date');
            $table->string('batch_timing'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upcoming_batches');
    }
};
