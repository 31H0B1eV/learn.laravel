<?php


class LessonUser extends \Eloquent {

    protected $table = 'lesson_user';

	protected $fillable = ['lesson_id', 'user_id'];
}