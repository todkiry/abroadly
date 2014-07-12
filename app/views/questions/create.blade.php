@extends('layouts.default')

@section('content')

	<h1>Ask a Question</h1>

	
	{{ Form::open(['route' => 'questions.store']) }}


		<div class="form-group">
      {{ Form::label('place', 'I have a question about') }}
 			{{ Form::select('place', $places,null, ['class'=>'form-control input-lg']) }}

		</div>

		<div class="form-group">
				{{ Form::label('header', 'Header') }} 
				{{ Form::text('header', null, ['class'=>'form-control input-lg'])}}
		</div>

		<div class="form-group">
				{{ Form::label('question', 'Question') }}
				{{ Form::textarea('question', null, ['class'=>'form-control '])}}
		</div>

 <div class="form-group">
				{{ Form::submit('Ask My Question', ['class'=>'btn btn-primary'])}}
		</div>


	{{ Form:: close() }}
@stop

@section('js')
<script>
var countries = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  limit: 10,
  prefetch: {
    // url points to a json file that contains an array of country names, see
    // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
    url: '/data',
    // the json file contains an array of strings, but the Bloodhound
    // suggestion engine expects JavaScript objects so this converts all of
    // those strings
    filter: function(list) {
      return $.map(list, function(place) { return { name: place }; });
    }
  }
});
 
// kicks off the loading/processing of `local` and `prefetch`
countries.initialize();
 
// passing in `null` for the `options` arguments will result in the default
// options being used
$('#prefetch .typeahead').typeahead(null, {
  name: 'countries',
  displayKey: 'name',
  // `ttAdapter` wraps the suggestion engine in an adapter that
  // is compatible with the typeahead jQuery plugin
  source: countries.ttAdapter()
});
</script>
@stop