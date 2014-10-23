<?php

class Topic extends Eloquent {

    protected $fillable = array('title', 'body');

    public static $rules = array(
        'title' => 'required',
        'body'  => 'required'
    );
    public function user()
    {
        return $this->belongsTo('User');
    }
}
