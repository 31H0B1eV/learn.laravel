@extends('layouts.base')

@section('title')
 Lear Laravel | Users
@stop

@section('content')
    @if (isset($lessons))
            @foreach ($lessons as $lesson)
                <h3>{{ $lesson->title }}</h3>
                <p>{{ $lesson->body }}</p>
                <hr />
            @endforeach
                <div class="text-center">{{ $lessons->links() }}</div>
    @endif
@stop