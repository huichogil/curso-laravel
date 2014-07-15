<html>
	<head>
		<title>@yield('titulo')</title>
		{{ HTML::style('assets/css/bootstrap.min.css') }}
	</head>
	<body>
		@yield('contenido')
		{{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
	</body>
</html>
