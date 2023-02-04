<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menssages extends Model
{
    protected $fillable = [
        'user_id', 'chat_id', 'text','file_path','file_name','send_date','type',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function chats(){
        return $this->belongsTo(chats::class);
    }
}
