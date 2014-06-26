@extends('layouts.base')

@section('title')
 Lear Laravel | Index
@stop

@section('content')

<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>ENV is: </strong>{{ $env }}
</div>

@stop