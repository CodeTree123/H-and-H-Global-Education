<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'university_id',
        'name',
        'description',
        'course_type_id',
        'study_level_id',
        'duration',
        'pathway_available',
        'price',
        'tution_fees',
        'overview',
        'icon'
    ];


    public function moreInfo()
    {
        return $this->hasMany(CourseMoreInfo::class);
    }    
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    // Relationship with the CourseType model
    public function courseType()
    {
        return $this->belongsTo(CourseType::class);
    }

    // Relationship with the StudyLevel model
    public function studyLevel()
    {
        return $this->belongsTo(StudyLevel::class);
    }
}
