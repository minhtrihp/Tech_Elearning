<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_lesson extends Model
{
    ///
    protected $table = 'course_lesson';

    protected $fillable = ['id', 'user_course_id', 'lesson_id'];

    public $timestamps = false;

    public function baigiang() {
        return $this->belongsTo('App\lesson','lesson_id','lesson_id');
    }

    public function hv_kh() {
        return $this->belongsTo('App\user_course');
    }
}