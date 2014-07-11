@extends('layouts.default')

@section('content')

	<h2>Profile</h2>


{{ $user->email; }}<br />
{{ $user->profile->location }}

<h3>Places</h3>
@foreach($user->profile->places as $place)
	{{ $place->place }}

@endforeach


<h3>Questions</h3>
<ul class="list-unstyled">
@foreach($questions=$user->questions as $question)

<li>{{ link_to("/questions/{$question->id}", $question->header) }}</li>
@endforeach
</ul>

@if(Auth::user()->id == $user->id)
<p>{{ link_to_route('profile.edit', 'Edit profile', Auth::user()->id, ['class'=>'btn btn-primary']) }}</p>



@endif

@stop