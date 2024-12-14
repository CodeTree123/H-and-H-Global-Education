<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityAdmission extends Model
{
    use HasFactory;

    protected $table = 'universityadmissions'; // Explicitly defining the table name (optional)

    protected $fillable = [
        'accordingTitle', 
        'accordingcontent',
    ];
}
