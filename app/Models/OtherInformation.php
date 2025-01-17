<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'identification_number', 'address', 'hashed_nid', 
        'hashed_passport', 'description', 'url_facebook', 
        'url_instagram', 'url_youtube', 'url_website', 
        'url_linkedin', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
