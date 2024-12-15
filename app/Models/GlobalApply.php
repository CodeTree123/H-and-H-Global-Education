<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class GlobalApply extends Model
{
    use HasFactory;
    protected $table = 'globalapplies'; 
    public $timestamps = true;  
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'email',
        'phone',
        'country',
        'university',
        'course',
        'mode_of_study',
        'address',
        'english_proficiency',
        'visa_refusal',
        'course_id',
    ];

    /**
     * Relationship with Country.
     */
    public function countryModal()
    {
        return $this->belongsTo(Country::class, 'country'); // 'country' should be the foreign key
    }

    /**
     * Relationship with University.
     */
    public function universityModal()
    {
        return $this->belongsTo(University::class, 'university'); // Assuming 'university' is the foreign key
    }

    /**
     * Relationship with Course.
     */
    public function courseModal()
    {
        return $this->belongsTo(Course::class, 'course'); // Assuming 'course' is the foreign key
    }
}

