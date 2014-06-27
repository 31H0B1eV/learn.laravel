{{ Form::open(['url' => '/add', 'class' => 'form']) }}
<div class="form-group">

    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
    {{ $errors->first('title', '<p class="bg-danger">:message</p>') }}

</div>

<div class="form-group">

    {{ Form::label('body', 'Body:') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    {{ $errors->first('body', '<p class="bg-danger">:message</p>') }}

</div>

<div class="form-group">

    {{ Form::submit('Create lesson', ['class' => 'btn btn-primary']) }}

</div>
{{ Form::close() }}