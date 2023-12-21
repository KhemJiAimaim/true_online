<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelSim extends Model
{
    use HasFactory;

    protected $table = "travel_sims";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function images() {
        return $this->hasMany(TravelImages::class, 'travel_id', 'id')->orderBy('defaults', 'DESC');
    }

}
