<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailInbox extends Model
{
    use HasFactory;

    protected $table = "mail_inboxes";

    protected $primaryKey = "id";

    protected $guarded = [];
}
