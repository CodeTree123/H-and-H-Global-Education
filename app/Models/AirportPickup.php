<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirportPickup extends Model
{
    use HasFactory;

    protected $table = 'airport_pickups';  // Change this to your table name if necessary
    protected $fillable = ['pageContent'];
}
