<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    ///
    protected $table = 'lessons';

    protected $fillable = ['lesson_id', 'name','describe', 'content', 'link', 'course_id'];
    protected  $primaryKey = 'lesson_id';


    public $timestamps = false;

    public function comment() {
        return $this->hasMany('App\comment');
    }

    public function course() {
        return $this->belongsTo('App\course','course_id','course_id');
    }
}