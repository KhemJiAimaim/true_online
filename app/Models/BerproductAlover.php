<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerproductAlover extends Model
{
    use HasFactory;

    protected $fillable = [
        'lover_id',
        'category',
        'func_id',
        'lover_group',
        'sort',
        'love_priority',
        'group_price',
        'status',
        'product_id',
        'product_phone',
        'product_improve',
        'product_price',
        'product_sumber',
        'product_grade', 
        'product_discount',
        'product_sold',
        'product_comment',
        'product_package',
        'monthly_status', 
    ];
}
