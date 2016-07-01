@extends('app')

@section('content')

@include('errors/list')

<div class="col-md-6 col-md-offset-3">
    {!! Form::open(['method'=>'post','url'=>'/auth/register']) !!}
    <div class="form-group">
	{!! Form::label('name','Name:') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	{!! Form::label('email','Email:') !!}
	{!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	{!! Form::label('password','Password:') !!}
	{!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
	{!! Form::label('password_confirmation','Password_Confirm:') !!}
        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Sing Up',['class'=>'btn btn-success form-control']) !!}
    {!! Form::close() !!}
</div>

@endsection
