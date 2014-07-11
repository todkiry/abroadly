@extends('layouts.default')

@section('content')

	<h2>Places</h2>
	<div class="row">

@foreach($places as $place)

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">

      <a href="/places/{{$place->id}}"><img src="http://dummyimage.com/300x150/{{mt_rand();}}/fff&text={{$place->place}}" /></a>
    </div>
  </div>



@endforeach
</div>

@stop