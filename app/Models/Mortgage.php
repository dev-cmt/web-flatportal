<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortgage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'home_value',
        'loan_amount',
        'term_years',
        'interest_rate',
        'financed_amount',
        'mortgage_payments',
        'annual_cost_of_loan'
    ];
}
