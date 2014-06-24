<?php


/**
 * Class HomeController
 */
class HomeController extends BaseController {

    /**
     *
     */
    const URL = 'http://www.unian.net/';

    /**
     * @return View
     */
    public function index()
	{
        $page = Helper::getHelperInstance(self::URL);

        var_dump($page->getContent());

		return View::make('index');
	}

}
