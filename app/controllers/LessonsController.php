<?php


class LessonsController extends BaseController {

    public function show()
    {
        $lessons = Lesson::paginate(8);

        if (Request::ajax()) {
            return Response::json(View::make('lessons', compact('lessons'))->render());
            exit;
        }

        return View::make('lessons', compact('lessons'));
    }
}