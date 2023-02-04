<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'password','nickname','fechaNac',
    ];
    
    public function post(){
        return $this->hasMany(posts::class);
    }
    public function followers(){
        return $this->hasMany(followers::class);
    }
    public function comments(){
        return $this->hasMany(comments::class);
    }
    public function reactions(){
        return $this->hasMany(reactions::class);
    }
    public function chats(){
        return $this->hasMany(chats::class);
    }
    public function menssages(){
        return $this->hasMany(menssages::class);
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password){
       $this->attributes['password']= bcrypt($password);
    }
   /**  protected function name(): Attribute
    *{
    *    return new Attribute(
    *        set: function($value){
    *            return strtolower($value);
    *        }
    *    )
    *}
    */
}
