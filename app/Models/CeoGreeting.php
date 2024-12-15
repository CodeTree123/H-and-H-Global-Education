<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CeoGreeting extends Model
{
    use HasFactory;

    protected $table = 'ceo_greetings'; // Your table name

    protected $fillable = [
        'title',
        'image',
        'message',
        'email',
        'phone',
        'address',
        'additional_info',
    ];
}
