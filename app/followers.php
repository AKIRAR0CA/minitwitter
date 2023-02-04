<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class followers extends Model
{
    protected $fillable = [
        'user_id', 'followed_id', 
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function follower(){
        return $this->belongsTo(User::class);
    }
    
}
