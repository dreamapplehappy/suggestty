<?php

class HomeController extends BaseController {

	public function home()
	{
        $topics = Topic::all();
        return View::make('page.home')->withTopics($topics);
	}

}
