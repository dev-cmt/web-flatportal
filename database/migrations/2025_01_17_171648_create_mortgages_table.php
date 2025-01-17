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
        Schema::create('mortgages', function (Blueprint $table) {
            $table->id();
            $table->decimal('home_value', 12, 2)->nullable();
            $table->decimal('loan_amount', 12, 2)->nullable();
            $table->integer('term_years')->nullable();
            $table->decimal('interest_rate', 5, 2)->nullable();
            $table->decimal('financed_amount', 12, 2)->default(0);
            $table->decimal('mortgage_payments', 12, 2)->default(0);
            $table->decimal('annual_cost_of_loan', 12, 2)->default(0);
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortgages');
    }
};
