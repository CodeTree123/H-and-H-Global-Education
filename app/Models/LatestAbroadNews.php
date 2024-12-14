<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class LatestAbroadNews extends Model
{
    use HasFactory;

    protected $table = 'createlatestabroadnews';

    protected $fillable = ['title', 'image', 'news_date'];

    protected $casts = [
        'news_date' => 'date',
    ];
}
