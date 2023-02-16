@extends('layouts.app')
@include('layouts.nav')

@section('titulo')
	Nuevo Curso
@endsection
@section('content')

	<form method="post" action="{{route('curso.store')}}">
		@csrf
		<label>
			Nombre:
		</label>
		<input type="text" name="nombre">
		<br><br>

		<label>
			Área:
		</label>
		<input type="text" name="area">
		<br><br>
		<button>Guardar</button>

	</form>
@endsection