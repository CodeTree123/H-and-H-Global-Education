<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
       
        'image',
        'location',            // New field
        'overview',            // New field
        'entry_requirements',  // New field
        'english_language',    // New field
        'tuition_fees',        // New field
        'scholarships',        // New field
        'university_banner',   // New field
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
