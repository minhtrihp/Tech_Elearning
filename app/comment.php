<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    protected $table = 'comments';

    protected $fillable = ['comment_id', 'content', 'user_id', 'lesson_id', 'news_id'];
    protected  $primaryKey = 'comment_id';

    public $timestamps = false;

    public function feedback() {
        return $this->hasMany('App\feedback');
    }

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function news() {
        return $this->belongsTo('App\news','news_id','news_id');
    }

    public function lesson() {
        return $this->belongsTo('App\lesson');
    }
}
