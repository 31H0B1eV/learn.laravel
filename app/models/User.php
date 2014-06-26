<?php


class User extends \Eloquent {

    protected $guarded = ['id', 'admin_group', 'password'];
    protected $fillable = ['user_name', 'user_email'];
}