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

    public function votes()
    {
        return $this->hasMany('Vote');
    }

    public function voteCount($voted){
        if($voted){
            $this->vote_count +=1;
        }
        else{ $this->vote_count -=1; }
        $this->save();
    }
}
