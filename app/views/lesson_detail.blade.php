@extends('layouts.base')

@section('title')
 Lear Laravel | Lesson detail
@stop

@section('content')
    @if (isset($lesson))
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="thumbnail">
<!--                <img src="http://placehold.it/300x300/" alt="...">-->
                <div class="caption">
                    <h3>{{ $lesson->title }}</h3>
                    <p>{{ $lesson->body }}</p>
                    <h3 class="text-right">User id: <small>{{ $lesson->user_id }}</small></h3>
<!--                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                </div>
            </div>
        </div>
    </div>
</div>
    @endif
@stop