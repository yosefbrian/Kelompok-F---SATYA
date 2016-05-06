@extends('layouts.master')

@section('content')

<h2>Welcome Back</h2>
  {!! Form::open(array('route' => 'handleLogin')) !!}
  <div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::text('email', null, array('class' => 'form-control')) !!}
  </div>
  <div class="form-group">
    {!! Form::label('password') !!}
    {!! Form::password('password', array('class' => 'form-control')) !!}
  </div>
  {!! Form::token() !!}
  {!! Form::submit(null, array('class' => 'btn-default')) !!}
{!! Form::close() !!}
@endsection
