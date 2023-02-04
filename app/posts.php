<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable = [
        'user_id', 'description', 'imagen_path','date_post',
    ];

    public $appends=['countComments','countReactions'];

    public function getCountComments(){
        return $this->comments->count();
    }
    
    public function getCountReactions(){
        return $this->reactions->count();
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(comments::class,'post_id');
    }
    public function reactions(){
        return $this->hasMany(reactions::class,'post_id');
    }

    public static function createPost($request){
        $ima=null;
        $post=(new static)::create([
            'user_id'=> Auth::id(),
            'description'=> $request->text ,
            'imagen_path' => $ima,
            'date_post'=>Carbon::now,  
        ]);
        return (new static)::with([
            'user',
            'comments',
            'reactions'
        ])->find($post->id);
    }
    
}
