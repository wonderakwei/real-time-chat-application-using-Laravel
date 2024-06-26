<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class ChatRoom extends Model
{
    use HasFactory;

    public function messages(){
        return $this->hasMany('App\Models\ChatMessage');
    }
}
