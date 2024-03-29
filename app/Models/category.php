<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Category extends Model

{

    use HasFactory;



    protected $table = "categories";

    protected $primaryKey = "id";

    protected $guarded = [];

    public function slides()
    {
        return $this->hasMany(AdSlide::class, 'page_id', 'id');
    }

}



