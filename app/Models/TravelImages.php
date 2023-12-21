<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelImages extends Model
{
    use HasFactory;

    protected $table = "travel_images";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function moveProduct() {
        return $this->belongsTo(TravelSim::class);
    }
}
