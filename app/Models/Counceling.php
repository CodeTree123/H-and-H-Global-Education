<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counceling extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'whatsapp',
        'country',
        'in_uk',
        'study_type',
        'subject',
    ];
}
