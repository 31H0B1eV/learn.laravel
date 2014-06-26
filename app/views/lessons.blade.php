@extends('layouts.base')

@section('title')
 Lear Laravel | Users
@stop

@section('content')
<div class="container">
    <div class="row lessons">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        	&nbsp
        </div>
        @if (isset($lessons))
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                @foreach ($lessons as $lesson)
                    <h3>{{ $lesson->title }}</h3>
                    <p>{{ $lesson->body }}</p>
                    <hr />
                @endforeach
            </div>
            <div style="text-align: center;">{{ $lessons->links() }}</div>
        @endif
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            &nbsp
        </div>
    </div>       
</div>          
@stop