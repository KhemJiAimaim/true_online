<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerpredictSum extends Model
{
    use HasFactory;

    protected $fillable = [
        'predict_id', 
        'predict_sum', 
        'predict_name', 
        'predict_description', 
        'predict_pin'
    ];
}
