<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerproductMonthly extends Model
{
    use HasFactory;

    protected $table = "berproduct_monthlies";

    protected $primaryKey = "product_id";

    protected $guarded = [];
}
