@extends('layouts.default')

@section('content')

	<h1>Edit Profile</h1>

	{{ Form::model($user->profile, ['method'=>'PATCH', 'route' => ['profile.update', $user->id]]) }}
	<h3>Places</h3>
<p>Places I've been or I am going to</p>
		<div class="form-group">
 			{{ Form::select('place', $places,null, ['class'=>'form-control', 'multiple'] ) }}


		</div>
		<div class="form-group">
				{{ Form::label('location', 'Current Location') }}
				{{ Form::text('location', null, ['class'=>'form-control'])}}
		</div>

		<div class="form-group">
				{{ Form::label('bio', 'Bio') }}
				{{ Form::textarea('bio', null, ['class'=>'form-control'])}}
		</div>


		<div class="form-group">
				{{ Form::label('twitter_username', 'Twitter Username') }}
				{{ Form::text('twitter_username', null, ['class'=>'form-control'])}}
		</div>

 <div class="form-group">
				{{ Form::submit('Update Profile', ['class'=>'btn btn-primary'])}}
		</div>


	{{ Form:: close() }}
@stop