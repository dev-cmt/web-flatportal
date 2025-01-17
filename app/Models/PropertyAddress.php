<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id', 'property_status', 'property_type',
        'property_condition', 'built_year', 'dimension',
        'country', 'city', 'location'
    ];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
