<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PropertyAddress;
use App\Models\PropertyImage;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_name', 'area_size', 'price', 'bedroom_count',
        'dining_room_count', 'bathroom_count', 'balcony_count',
        'other_features', 'description', 'image_path',
        'video_path', 'floor_plan_path', 'pdf_path', 'phases', 'status', 'agent_id'
    ];

    protected $casts = [
        'other_features' => 'array',
    ];

    public function agent() {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function propertyAddress() {
        return $this->hasOne(PropertyAddress::class);
    }

    public function propertyImages() {
        return $this->hasMany(PropertyImage::class);
    }
}
