<?php


/**
 * Class HomeController
 */
class HomeController extends BaseController {

    /**
     * @return View
     */
    public function index()
	{
    
        $env = app('env');

		return View::make('index', compact('env'));
	}

}
