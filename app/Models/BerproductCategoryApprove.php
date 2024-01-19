<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerproductCategoryApprove extends Model
{
    use HasFactory;

    protected $fillable = [
        'func_cate_id',
        'func_name',
        'func_desc',
        'func_display',
    ];
}
