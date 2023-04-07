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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->float('price');
            $table->float('area');
            $table->string('adrress');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('type');
            $table->integer('rooms_number');
            $table->integer('beedrooms_number');
            $table->integer('garages_number');
            $table->integer('bath_number');
            $table->string('features');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
