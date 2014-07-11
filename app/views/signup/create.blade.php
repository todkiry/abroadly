@extends('layouts.default')


@section('content')

        <h1>Sign up</h1>

	{{ Form::open(['route' => 'signup.store']) }}


	<div class="form-group">

		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
		{{ $errors->first('name', '<span class="error">:message</span>')}}

	</div>
		<div class="form-group">

		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
		{{ $errors->first('email', '<span class="error">:message</span>')}}
</div>
	<div class="form-group">

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
		{{ $errors->first('password', '<span class="error">:message</span>')}}

</div>

	<div class="form-group">

		{{ Form::label('password_confirmation', 'Password Confirmation') }}
		{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
</div>

		{{ Form::submit('Sign up', ['class'=>'btn btn-primary']) }}


	{{ Form::close() }}

@stop