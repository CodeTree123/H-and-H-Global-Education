<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'mission_title',
        'mission_description',
        'team_title',
        'team_position',
        'team_description',
        'team_profile_image',
        'achievement_image',
    ];
}
