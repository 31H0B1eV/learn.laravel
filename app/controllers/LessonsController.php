<?php


class LessonsController extends BaseController {


    public function __construct()
    {
        $this->beforeFilter('auth.basic', ['on' => 'post']);
    }
    
    public function show()
    {
        $lessons = Lesson::paginate(16);

//        if (Request::ajax()) {
//            return Response::json(View::make('lessons', compact('lessons'))->render());
//            exit;
//        }

        return View::make('lessons', compact('lessons'));
    }

    public function create()
    {
        if(! Input::get('title') or ! Input::get('body'))
        {

        }

        return 'done';
    }
}