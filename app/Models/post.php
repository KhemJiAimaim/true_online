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

    public function getFormattedCreatedAtAttribute()
    {
        if ($this->attributes['created_at']) {
            return Carbon::parse($this->attributes['created_at'])
                ->locale('th')
                ->isoFormat('MMM D, Y H:i:s')
                ->addYears(543);
        }

        return null;
    }
}

