@extends('layouts.base')

@section('title')
 Lear Laravel | Lessons
@stop

@section('content')
    @if (isset($lessons))
<div class="container">
    <div class="row">
        <div class="text-center">{{ $lessons->links() }}</div>
    </div>
    <div class="row">
        @foreach ($lessons as $lesson)
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <article class="thumbnail">
<!--                <img src="http://placehold.it/300x300/" alt="...">-->
                <div class="caption">
                    <a href="lessons/{{ $lesson->id }}"><h3>{{ $lesson->title }}</h3></a>
                    <p>{{ $lesson->body }}</p>
                </div>
                <div class="text-center">
                    {{ Form::open(['route' => 'favorites.store']) }}
                        {{ Form::hidden('lesson-id', $lesson->id) }}
                        <button type="submit" class="btn-naked">
                            <span class="glyphicon glyphicon-heart not-favorited"></span>
                        </button>
                    {{ Form::close() }}
                </div>
            </article>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="text-center">{{ $lessons->links() }}</div>
    </div>
</div>
    @endif
@stop