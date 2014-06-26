@extends('layouts.base')

@section('title')
 Lear Laravel | Users
@stop

@section('content')
<div class="container">
    <div class="row">
        &nbsp
    </div>
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        &nbsp
    </div>
@if (isset($lessons))                        
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    @foreach ($lessons as $lesson)
        
            <h3>{{ $lesson->title }}</h3>
            <p>{{ $lesson->body }}</p>
            <hr />
    @endforeach

    <div style="text-align: center;">{{ $lessons->links() }}</div>   
        </div>
@endif

    </div>       
</div>          
@stop