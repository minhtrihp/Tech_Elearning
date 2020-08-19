<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    protected $table = 'news';

    protected $fillable = ['news_id', 'name','describe', 'content', 'topic_id','user_id'];
    protected  $primaryKey = 'news_id';
    public $timestamps = false;

    public function comment() {
        return $this->hasMany('App\comment','news_id','news_id');
    }

    public function topic() {
        return $this->belongsTo('App\topic','topic_id','topic_id');
    }

    public function User() {
        return $this->belongsTo('App\User');
    }
}