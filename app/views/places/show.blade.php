@extends('layouts.default')

@section('content')

	<h2>{{ $place->place; }}</h2>






	<p><img alt="{{ $place->place }}" src="http://maps.google.com/maps/api/staticmap?center={{ $place->place }}&amp;zoom=4&amp;size=600x200&amp;markers=size:med|color:green|Belgrano, Argentina\&amp;markers=size:mid|color:0xFFFF00|label:C|Tok,AK&amp;sensor=false"></p>

<h3>Questions about {{ $place->place }}</h3>

<div class="row">

@foreach($question=$place->questions as $question)
<div class="col-sm-6 col-md-4">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{ link_to("/questions/{$question->id}", $question->header) }}</h3>
  </div>
  <div class="panel-body">
  		<p><em>by {{ $question->user->name; }}</em><br />

  		{{ $question->question }}</p>
<br />
  		<p>{{ link_to_route('answers.create', 'Answer', ['q'=>$question->id], ['class'=>'btn btn-default']) }}
</p>

  </div>
</div>
</div>
@endforeach
</div>

  <p>{{ link_to_route('questions.create', 'Ask a Question', ['id'=>$place->id], ['class'=>'btn btn-primary btn-lg btn-warning']) }}</p>


@stop