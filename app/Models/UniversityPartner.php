<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class UniversityPartner extends Model
{
    use HasFactory;
    protected $table = 'createuniversitypartners';
    protected $fillable = ['image'];
}