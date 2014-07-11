<!doctype html>

<html lang="en">

<head>
	<title>Abroad.ly</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/main.css"/>
	<meta charset="UTF-8">
</head>
    <body>

    	@include('layouts.partials.nav')


		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-centered">
					<div class="main-container">
				        @yield('content')
					</div>
				</div>
			</div>
    	</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="http://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>

        @yield('js')

    </body>
</html>