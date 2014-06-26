<?php


class LessonsController extends BaseController {

    public function show()
    {
        $lessons = Lesson::paginate(6);

        return View::make('lessons', compact('lessons'));
    }
}