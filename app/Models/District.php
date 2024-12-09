<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'name',
        'bn_name',
        'lat',
        'lon',
        'url',
    ];

    /**
     * Get the division that owns the district.
     */
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    /**
     * Get the unions for the district.
     */
    public function unions()
    {
        return $this->hasMany(Union::class);
    }
}
