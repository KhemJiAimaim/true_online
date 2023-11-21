<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageProduct extends Model
{
    use HasFactory;

    protected $table = "package_products";
    protected $primaryKey = "id";
    protected $guarded = [];
}
