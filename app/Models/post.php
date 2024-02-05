<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Carbon;

class Post extends Model

{

    use HasFactory;



    protected $table = "posts";

    protected $primaryKey = "id";

    protected $guarded = [];

}

