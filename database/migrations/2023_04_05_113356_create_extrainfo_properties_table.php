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
        Schema::create('extrainfo_properties', function (Blueprint $table) {
            $table->id();
            $table->string('AirConditioning');
            $table->string('TVCable&WIFI');
            $table->string('Refrigerator');
            $table->string('WindowCovering');
            $table->string('SwimmingPoolConditioning');
            $table->string('Gym');
            $table->string('LaundryRoom');
            $table->string('Microwave');
            $table->unsignedBigInteger('landloard_id');
            $table->foreign('landloard_id')->references('id')->on('users');
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extrainfo_properties');
    }
};
