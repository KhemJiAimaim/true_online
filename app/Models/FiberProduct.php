<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiberProduct extends Model
{
    use HasFactory;

    protected $table = "fiber_products";
    protected $primaryKey = "id";
    protected $guarded = [];
}
