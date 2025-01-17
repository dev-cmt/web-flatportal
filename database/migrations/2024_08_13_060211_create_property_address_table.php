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
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade');
            $table->enum('property_status', ['For Sale', 'For Rent']);
            $table->string('property_type')->nullable();
            $table->string('property_condition')->nullable();
            $table->year('built_year')->nullable();
            $table->string('dimension')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_address');
    }
};
