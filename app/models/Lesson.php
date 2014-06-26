<?php


class Lesson extends Eloquent {

    protected $fillable = ['title', 'body'];

    protected $guarded = array('id');
}