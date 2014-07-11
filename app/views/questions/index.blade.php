@extends('layouts.default')

@section('content')

	<h1>Questions</h1>
	
@foreach($questions as $question)
<li>{{ link_to("/questions/{$question->id}", $question->header) }} </li>


@endforeach

@stop