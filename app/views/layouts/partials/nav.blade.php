<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/img/logo.png"/> abroadly</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">


        @if (Auth::guest())
        
          <li>{{ link_to_route('signup.store', 'Sign Up',null,  ['class'=>'signup'])}}</li>
          <li><a href="/login">Login</a></li>
        
        @else

          <li>{{ link_to_route('questions.create', 'Ask a Question') }}</li> 
          <li>{{ link_to_route('places.index', 'Places') }}</li> 
          <li>{{ link_to_route('profile.show', 'Profile', Auth::user()->id) }}</li>
          <li><a href="/logout">Log Out</a></li>

        @endif

      </ul>

    </div><!-- /.navbar-collapse -->
  </div>
</nav>