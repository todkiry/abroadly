@extends('layouts.default')

@section('content')

	<h2>Answers</h2>
	
@foreach($answers as $answer)
<li>{{ link_to("/answers/{$answer->id}", $answer->answer) }}</li>


@endforeach

@stop