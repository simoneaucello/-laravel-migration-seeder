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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time')->default('00:00');
            $table->time('arrival_time')->default('00:00');
            $table->string('train_code', 12)->unique();
            $table->tinyInteger('car_number')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
