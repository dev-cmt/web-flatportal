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
            $table->string('property_name')->nullable();
            $table->decimal('area_size', 10, 2)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('bedroom_count')->nullable();
            $table->integer('dining_room_count')->nullable();
            $table->integer('bathroom_count')->nullable();
            $table->integer('balcony_count')->nullable();
            $table->json('other_features')->nullable();
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->string('video_path')->nullable();
            $table->string('floor_plan_path')->nullable();
            $table->string('pdf_path')->nullable();
            $table->string('phases')->nullable();
            $table->enum('status', ['Published', 'Unpublished', 'Draft'])->default('Draft');
            $table->foreignId('agent_id')->nullable()->constrained('users')->onDelete('set null');
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
