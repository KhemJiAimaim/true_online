<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoveImages extends Model
{
    use HasFactory;

    protected $table = "move_images";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function moveProduct() {
        return $this->belongsTo(MoveProduct::class);
    }
}
