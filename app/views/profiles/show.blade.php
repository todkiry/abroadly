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
<div class="panel-group" id="accordion">

@foreach($questions=$user->questions as $question)


 <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#{{$question->id}}">
          {{ $question->header }}
          <span class="pull-right label label-default">{{$question->place->place }}</span>
        </a>
      </h4>
    </div>
    <div id="{{$question->id}}" class="panel-collapse collapse">
      <div class="panel-body">
      	{{ $question->question }}


      </div>
    </div>
  </div>


@endforeach
</div>

@if(Auth::user()->id == $user->id)
<p>{{ link_to_route('profile.edit', 'Edit profile', Auth::user()->id, ['class'=>'btn btn-primary']) }}</p>



@endif

@stop