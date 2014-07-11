@extends('layouts.default')


@section('content')
	<h1>Sign Up</h1>


	{{ Form::open(['route' => 'users.store']) }}

		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', 'Name') }}

		{{ Form::label('email', 'Email') }}
		{{ Form::email('email') }}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}


		{{ Form::submit('Sign up') }}

	{{ Form::close() }}

@stop
