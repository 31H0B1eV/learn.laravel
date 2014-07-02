<?php


class LessonsController extends BaseController {


    public function __construct()
    {
        $this->beforeFilter('auth.basic', ['on' => 'post']);
    }

    public function index()
    {
        $lessons = Lesson::paginate(16);

        return View::make('lessons', compact('lessons'));
    }
    
    public function show($lessonId)
    {
        $lesson = Lesson::findOrFail($lessonId);

        return View::make('lesson.detail', compact('lesson'));
    }

    public function create()
    {
        Auth::attempt(array('email' => 'arzinoviev@gmail.com', 'password' => 'secret'));
//        if(! Input::get('title') or ! Input::get('body'))
//        {
//            return $this->setStatusCode(422)
//                        ->respondWithError('failed validation parameters');
//        }

        return 'done';
    }
}