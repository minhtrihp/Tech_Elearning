<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    ///
    protected $table = 'courses';

    protected $fillable = ['course_id', 'name','describe', 'topic_id', 'user_id'];
    protected  $primaryKey = 'course_id';

    public $timestamps = false;

    public function lesson () {
        return $this->hasMany('App\lesson','course_id','course_id');
    }

    public function topic () {
        return $this->belongsTo('App\topic','topic_id','topic_id');
    }

    public function User () {
        return $this->belongsTo('App\User','user_id','id');
    }
}