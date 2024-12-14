<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCounselling extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's convention
    protected $table = 'studentcounsellings';
    protected $fillable = ['pageContent'];
}
