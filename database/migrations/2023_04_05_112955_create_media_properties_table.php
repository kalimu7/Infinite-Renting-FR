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
        Schema::create('media_properties', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('video_path')->nullable();
            $table->unsignedBigInteger('properties_id');
            $table->foreign('properties_id')->references('id')->on('properties');
            $table->unsignedBigInteger('landloard_id');
            $table->foreign('landloard_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_properties');
    }
};
