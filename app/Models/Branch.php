<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    // Add 'email' and 'location_map' to the $fillable property
    protected $fillable = [
        'branch_name', 
        'address', 
        'phone', 
        'facebook_page', 
        'email',          // Added email to fillable
        'location_map',   // Added location_map to fillable
        'location_id'
    ];

    // Define the relationship with the Location model
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
