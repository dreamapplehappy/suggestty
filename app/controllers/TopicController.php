<?php

class TopicController extends \BaseController {
    public function __construct(){
        $this->beforeFilter('auth', ['except' => ['show']]);
        $this->beforeFilter('csrf', ['on' => ['post','put','patch','delete']]);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('topics.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    $data = Input::except('_token');
        $rules = Topic::$rules;
        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $topic = new Topic;
        $topic->title = $data['title'];
        $topic->body = $data['body'];
        $topic->user_id = $data['user_id'];

        if($topic->save()){
            return Redirect::route('home');
        }
        return Redirect::back();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $topic = Topic::find($id);
        $replies = $topic->replies;
        return View::make('topics.show',compact('topic','replies'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $topic = Topic::findOrFail($id);
        return View::make('topics.create')->withTopic($topic);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$topic = Topic::findOrFail($id);
        $data = Input::only('title', 'body');
        $validator = Validator::make($data, Topic::$rules);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $topic->title = $data['title'];
        $topic->body = $data['body'];
        if($topic->save()){
            return Redirect::route('topic.show', $topic->id);
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
