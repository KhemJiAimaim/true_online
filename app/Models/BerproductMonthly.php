<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerproductMonthly extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 
        'product_phone', 
        'product_sumber', 
        'product_price', 
        'product_category', 
        'product_improve', 
        'product_sold', 
        'product_new', 
        'product_comment', 
        'product_package', 
        'product_hot', 
        'product_discount', 
        'product_grade', 
        'product_display'
    ];
}
