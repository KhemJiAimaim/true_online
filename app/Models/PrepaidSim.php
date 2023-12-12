<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrepaidSim extends Model
{
    use HasFactory;

    protected $table = "prepaid_sims";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function images() {
        return $this->hasMany(PrepaidImage::class, 'prepaid_id', 'id')->orderBy('defaults', 'DESC');
    }
}
