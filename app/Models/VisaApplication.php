<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaApplication extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'visa_applications';

    // Specify the fillable fields for mass assignment
    protected $fillable = ['pageContent']; // Add other fields as needed
}
