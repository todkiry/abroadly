@extends('layouts.default')


@section('content')

		@if (Auth::guest())


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/img/hero0.jpg" alt="...">
 <div class="carousel-caption">
    <h3>Going abroad for the first time?</h3>
    <p>The interactive Q&amp;A platform for students going abroad. Get personal travel tips and recommendations from students in your college community.</p>
          <p>{{ link_to_route('signup.store', 'Sign up', null, ['class' => 'btn btn-lg btn-warning']); }}
            {{ link_to_route('login', 'Login', null, ['class' => 'btn btn-lg btn-default']); }}
          </p>    </div>
  </div>


    <div class="item">
      <img src="/img/hero2.jpg" alt="...">
 <div class="carousel-caption">
    <h3>Your classmates can help</h3>
    <p>Find out what to do from your classmates who have been there already.</p>
    </div>
  </div>

      <div class="item">
      <img src="/img/hero3.jpg" alt="...">
 <div class="carousel-caption">
    <h3>Let your voice be heard</h3>

    </div> 
  </div>
</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

	    @else
			<h2>Welcome, {{ Auth::user()->name }}</h2>

      <p>Let's get started! Please ask your first question.</p>


        @endif
        		
        

@stop