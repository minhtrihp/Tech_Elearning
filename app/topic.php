<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    ///
    protected $table = 'topics';

    protected $fillable = ['topic_id', 'name'];

    public $timestamps = false;

    public function course() {
        return $this->hasMany('App\course','topic_id','topic_id');
    }
    
    public function news() {
        return $this->hasMany('App\news','topic_id','topic_id');
    }
}