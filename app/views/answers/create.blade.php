@extends('layouts.default')

@section('content')

	<h1>{{$question->header}}</h1>

	
	{{ Form::open(['route' => 'answers.store']) }}



		<div class="form-group">
				{{ Form::label('answer', 'Answer') }}
				{{ Form::textarea('answer', null, ['class'=>'form-control'])}}
				{{ Form::hidden('id', $question->id) }}
		</div>


 <div class="form-group">
				{{ Form::submit('Answer', ['class'=>'btn btn-primary'])}}
		</div>


	{{ Form:: close() }}
@stop