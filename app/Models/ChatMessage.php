<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ChatMessage extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->hasOne('App\Models\ChatRoom','id','chart_room_id');
    }
    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
