<?php


class Lesson extends Eloquent {

    protected $fillable = ['title', 'body', 'user_id'];

    protected $guarded = array('id');
}