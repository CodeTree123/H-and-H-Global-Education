<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeCounselling extends Model
{
    use HasFactory;

    protected $table = 'freecounsellings'; // Define table name
    protected $fillable = [
        'name',
        'email',
        'contact',
        'education',
        'grade',
        'institute_name',
        'graduation_year',
        'language',
        'destination',
        'current_location',
    ];
}
