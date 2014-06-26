<?php


class LessonsController extends BaseController {

    public function show()
    {
        return View::make('lessons');
    }
}