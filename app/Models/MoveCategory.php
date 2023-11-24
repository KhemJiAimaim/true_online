<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoveCategory extends Model
{
    use HasFactory;

    protected $table = "move_categories";
    protected $primaryKey = "id";
    protected $guarded = [];
}
