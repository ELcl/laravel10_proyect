@extends('layouts.app')

@section('titulo')
	Login
@endsection

@section('content')

	<form method="post" action="{{route('login')}}">
		@csrf

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


		<button>Login</button>

	</form>
	<br>
	@guest
		<a href="{{route('register')}}">Registro</a>
	@endguest
@endsection