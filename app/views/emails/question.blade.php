<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<img src="http://abroadly.in/img/logo.png" alt="abroadly"/>
		<h2>Question about {{ $place }} </h2>

		<p>
			{{ $username }} asked a question about {{ $place }}
		</p>


		<blockquote>
			<h4>{{ $header }} </h4>
			{{ $question }}
		</blockquote>

		<div>
		</div>

		<strong><a href="http://abroadly.in/questions/{{ $id }}">Answer question</a></strong>
	</body>
</html>
