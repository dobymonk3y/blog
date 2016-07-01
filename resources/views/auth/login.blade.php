@extends('app')

@section('content')

@include('errors/list')

<div class="col-md-4 col-md-offset-4">
    {!! Form::open(['method'=>'post','url'=>'/auth/login']) !!}
    <div class="form-group">
	{!! Form::label('email','Email') !!}
	{!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	{!! Form::label('password','Password') !!}
	{!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Sing In',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
</div>

@endsection
