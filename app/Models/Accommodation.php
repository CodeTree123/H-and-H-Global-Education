<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's convention
    protected $table = 'accommodations';

    // Specify the fillable fields for mass assignment
    protected $fillable = ['pageContent'];
}
