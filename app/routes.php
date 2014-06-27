<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/lessons', 'LessonsController@show');

Route::get('/add', function(){
    return View::make('create_lesson');
});

Route::post('/add', 'LessonsController@create');