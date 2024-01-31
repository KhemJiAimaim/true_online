<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrepaidNetwoek extends Model
{
    use HasFactory;
    protected $table = "prepaid_netwoeks";

    protected $primaryKey = "id";

    protected $guarded = [];
}
