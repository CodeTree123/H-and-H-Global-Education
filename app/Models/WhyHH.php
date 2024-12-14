<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyHH extends Model
{
    use HasFactory;

    protected $table = 'why_hh_global_education'; // Table name, adjust if necessary

    protected $fillable = [
        'title', 
        'description', 
        'image'  // Include 'image' if you're storing an image path
    ];
}
