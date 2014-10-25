<?php
 
class Vote extends Eloquent {
    protected $table = 'votes';

    protected $fillable = ['user_id', 'topic_id', 'voted'];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function topic()
    {
        return $this->belongsTo('Topic');
    }
}
