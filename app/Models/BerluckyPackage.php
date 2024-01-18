<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerluckyPackage extends Model
{
    use HasFactory;

    protected $table = "berlucky_packages";
    protected $primaryKey = "id";
    protected $guarded = [];
}
