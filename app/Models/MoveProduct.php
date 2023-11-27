<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoveProduct extends Model
{
    use HasFactory;

    protected $table = "move_products";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function images() {
        return $this->hasMany(MoveImages::class, 'move_id', 'id')->orderBy('defaults', 'DESC');
    }
}
