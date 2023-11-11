<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerpredictProphecy extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'prophecy_id',
        'prophecy_numb',
        'prophecy_name',
        'prophecy_desc',
        'prophecy_percent',
        'prophecy_color'
    ];
}
