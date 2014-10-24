<?php

class Topic extends Eloquent {

    protected $fillable = array('title', 'body','user_id','reply_count','vote_count');

    public static $rules = array(
        'title' => 'required',
        'body'  => 'required'
    );
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function replies()
    {
        return $this->hasMany('Reply');
    }
}
