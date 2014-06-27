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
        Auth::attempt(array('email' => 'arzinoviev@gmail.com', 'password' => 'secret'));
//        if(! Input::get('title') or ! Input::get('body'))
//        {
//            return $this->setStatusCode(422)
//                        ->respondWithError('failed validation parameters');
//        }

        return 'done';
    }
}