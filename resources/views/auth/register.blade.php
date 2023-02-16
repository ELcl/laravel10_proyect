@extends('layouts.app')

@section('titulo')
	Registro
@endsection

@section('content')

	<form method="post" action="{{route('register')}}">
		@csrf
		<label>
			Nombre:
		</label>
		<input type="text" name="nombre" autofocus="autofocus">
		<br><br>

		<label>
			Email:
		</label>
		<input type="email" name="email">
		<br><br>

		<label>
			Password:
		</label>
		<input type="Password" name="password">
		<br><br>


		<label>
			Confrmar password:
		</label>
		<input type="Password" name="password_confirmation">
		<br><br>

		<button>Registro</button>

	</form>
	<br>

	<a href="{{route('login')}}"> Login </a>
@endsection