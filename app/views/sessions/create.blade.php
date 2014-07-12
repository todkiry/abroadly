@extends('layouts.default')


@section('content')

<h1>Log In</h1>


		{{ Form::open(['route'=>'sessions.store']) }}

		<div class="form-group">

			{{ Form::label('email', 'Email:') }}
			{{ Form::email('email', null, ['class' => 'form-control input-lg']) }}
			{{ $errors->first('email', '<span class="error">:message</span>')}}
		
		</div><div class="form-group">
		
			{{ Form::label('password', 'Password')}}
			{{ Form::password('password', ['class' => 'form-control input-lg'])}}
			{{ $errors->first('password', '<span class="error">:message</span>')}}

		
		</div>

			{{ Form::submit('Login') }}
		
		@if(Session::has('flash_message'))
		<div class="form-group">
			<p>{{ Session::get('flash-message') }}</p>
		</div>

		@endif

		{{ Form::close() }}

@stop