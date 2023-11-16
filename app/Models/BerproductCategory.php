<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerproductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'bercate_id',
        'bercate_name',
        'bercate_title',
        'thumbnail',
        'bercate_needful',
        'bercate_needless',
        'priority',
        'bercate_total',
        'bercate_discount',
        'discount_begin',
        'discount_expire',
        'status',
        'bercate_pin',
        'allow_edit',
        'bercate_display',
        'update_by',
        'bercate_h1',
        'bercate_h2',
        'bercate_content',
        'meta_title',
        'meta_description'
    ];
}
