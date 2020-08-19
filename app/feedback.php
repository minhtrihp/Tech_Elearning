<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    ///
    protected $table = 'feedbacks';

    protected $fillable = ['feedback_id', 'content', 'user_id', 'comment_id'];

    public $timestamps = false;

    public function User() {
        return $this->beongsTo('App\User');
    }

    public function comment() {
        return $this->belongsTo('App\comment');
    }
}