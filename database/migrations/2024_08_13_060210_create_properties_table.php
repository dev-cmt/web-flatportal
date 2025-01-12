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
            $table->enum('property_status', ['For Sale', 'For Rent']);
            $table->string('property_type');
            $table->string('property_condition');
            $table->year('built_year')->nullable();
            $table->string('dimension')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('location');
            $table->string('phases');
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
