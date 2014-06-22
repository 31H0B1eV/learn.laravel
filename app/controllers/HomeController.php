<?php


class HomeController extends BaseController {

	public function index()
	{
        $page = Helper::getHelperInstance("http://www.unian.net/");

        var_dump($page->getContent());

		return View::make('index');
	}

}
