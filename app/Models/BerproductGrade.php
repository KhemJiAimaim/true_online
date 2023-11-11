<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerproductGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade_id', 
        'grade_name', 
        'grade_description', 
        'grade_max', 
        'grade_min', 
        'grade_priority', 
        'grade_display'
    ];
}
