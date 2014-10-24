<?php

class ReplyController extends \BaseController {
    
    public function __construct(){
        $this->beforeFilter('auth');
        $this->beforeFIlter('csrf',['on' => ['post', 'put', 'patch', 'delete']]);
    } 

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::except('_token');
        $validator = Validator::make($data, Reply::$rules);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $reply = Reply::create($data);
        // add reply_count
        $topic = $reply->topic;
        $topic->reply_count += 1;
        $topic->save();
        return Redirect::back();
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$reply = Reply::findOrFail($id);
        return View::make('replies.edit', compact('reply'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $reply = Reply::findOrFail($id);
        $data = Input::except('_method','_token');
        $validator = Validator::make($data, Reply::$rules);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $reply->body = $data['body'];
        if($reply->save()){
            return Redirect::route('topic.show', $reply->topic_id);
        }
        return Redirect::back();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
