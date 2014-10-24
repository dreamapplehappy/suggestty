<?php

class Reply extends Eloquent {
    protected $table = 'replies';

    protected $fillable = array('body','user_id','topic_id');

    public static $rules = [
        'body' => 'required'
    ];
    public function topic()
    {
        return $this->belongsTo('Topic');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
