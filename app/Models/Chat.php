<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = "chat";
    protected $fillable = [
        "send_user_id", "received_user_id", "mensaje"
    ];
}