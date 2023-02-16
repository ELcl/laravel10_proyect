<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplicacion - @yield('titulo')</title>
</head>
<body>
		@include('layouts.nav')
	<h1>
		Cursos
	</h1>

	@yield('content')
</body>
</html>