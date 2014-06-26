@extends('layouts.base')

@section('title')
 Lear Laravel | Index
@stop

@section('content')

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>ENV is: </strong>{{ $env }}
</div>
<div class="alert alert-warning">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Warning</strong> this page is empty...
</div>

@stop