<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrepaidCategory extends Model
{
    use HasFactory;

    protected $table = "prepaid_categories";
    protected $primaryKey = "id";
    protected $guarded = [];

}
