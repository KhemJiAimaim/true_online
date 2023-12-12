<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrepaidImage extends Model
{
    use HasFactory;

    protected $table = "prepaid_images";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function prepaidSim() {
        return $this->belongsTo(PrepaidSim::class);
    }
}
