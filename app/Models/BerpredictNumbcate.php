<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerpredictNumbcate extends Model
{
    use HasFactory;

    protected $fillable = [
        'numbcate_id',
        'numbcate_name',
        'numbcate_title',
        'numbcate_want',
        'numbcate_unwant',
        'numbcate_pin',
        'numbcate_display',
        'thumbnail',
        'numbcate_priority'
    ];
}
