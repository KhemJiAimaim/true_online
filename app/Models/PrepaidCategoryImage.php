<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrepaidCategoryImage extends Model
{
    use HasFactory;

    protected $table = "prepaid_category_images";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function prepaidCate() {
        return $this->belongsTo(PrepaidCategory::class);
    }
}
