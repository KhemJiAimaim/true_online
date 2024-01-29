<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bernetwork extends Model
{
    use HasFactory;

    protected $table = "bernetworks";

    protected $primaryKey = "network_id";

    protected $guarded = [];
}
