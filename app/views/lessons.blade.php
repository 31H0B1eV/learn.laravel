@extends('layouts.base')

@section('title')
 Lear Laravel | Users
@stop

@section('content')
    @if (isset($lessons))
<div class="container">
    <div class="row">
        @foreach ($lessons as $lesson)
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="thumbnail">
<!--                <img src="http://placehold.it/300x300/" alt="...">-->
                <div class="caption">
                    <h3>{{ $lesson->title }}</h3>
                    <p>{{ $lesson->body }}</p>
<!--                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="text-center">{{ $lessons->links() }}</div>
    </div>
</div>
    @endif
@stop