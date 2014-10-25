<?php

class VoteController extends \BaseController {

    public function vote(){
        if(Request::ajax()){
            $user_id = Input::get('user_id');
            $topic_id = Input::get('topic_id');

            $vote = Vote::firstOrCreate(compact('user_id', 'topic_id'));
            $vote->voted = !$vote->voted;

            if($vote->save()){
                $topic = Topic::find($topic_id);
                $topic->voteCount($vote->voted);
            }
        }
        return ;
    }

}
