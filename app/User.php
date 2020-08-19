<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','birthdate', 'level'
    ];

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
    
    ///
    public function course() {
        return $this->hasManyThrough('App\course','App\user_course'); 
    }
    public function hv_kh() {
        return $this->hasMany('App\user_course');
    }

    public function phanhoi() {
        return $this->hasMany('App\feedback');
    }

    public function binhluan() {
        return $this->hasMany('App\comment');
    }
    
    public function tintuc() {
        return $this->hasMany('App\news');
    }

}
