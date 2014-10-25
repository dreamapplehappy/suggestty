<?php

class HomeController extends BaseController {

	public function home()
	{
        $topics = Topic::paginate(5);
        return View::make('page.home')->withTopics($topics);
	}

}
