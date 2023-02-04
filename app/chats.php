<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chats extends Model
{
    protected $fillable = [
        'user_send', 'user_recive', 
    ];
    public function usersend(){
        return $this->belongsTo(User::class);
    }
    public function userrecive(){
        return $this->belongsTo(User::class);
    }
    public function menssages(){
        return $this->hasMany(menssages::class,'chat_id');
    }
}
