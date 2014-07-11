@extends('layouts.default')

@section('content')

	<h1>{{ $question->header; }}</h1>
<p>By: {{ link_to("/profiles/{$question->user->id}", $question->user->name) }} </p>
<p>{{ $question->question; }}</p>


{{ link_to_route('answers.create', 'Answer Question', ['q'=>$question->id], ['class'=>'btn btn-primary']) }}


<h3>Answers</h3>

<class="row">
@foreach($question->answers as $answer)

<div class="col-sm-6 col-md-4">
<div class="panel panel-default">
  <div class="panel-body">
  		<p><em>by {{ $answer->user->name; }}</em><br />

  		{{ $answer->answer }}</p>

  		<p><a href="" class="btn"><i class="glyphicon glyphicon-thumbs-up"></i></a><a href="" class="btn"><i class="glyphicon glyphicon-thumbs-down"></i></a>
</p>

  </div>
</div>
</div>
	
@endforeach
</div>
@stop