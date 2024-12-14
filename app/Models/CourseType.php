<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Add any relationships if needed
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
