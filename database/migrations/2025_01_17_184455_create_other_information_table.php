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
        Schema::create('other_information', function (Blueprint $table) {
            $table->id();
            $table->string('identification_number')->unique()->nullable();
            $table->string('address')->nullable();
            $table->text('hashed_nid')->nullable();
            $table->text('hashed_passport')->nullable();
            $table->text('description')->nullable();
            
            // Fixed column names and changed URLs to text for better storage
            $table->text('url_facebook')->nullable();
            $table->text('url_instagram')->nullable();
            $table->text('url_youtube')->nullable();
            $table->text('url_website')->nullable();
            $table->text('url_linkedin')->nullable();
        
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_information');
    }
};
