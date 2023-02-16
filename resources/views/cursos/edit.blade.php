@extends('layouts.app')

@section('content')

	<form method="post" action="{{route('curso.update', $curso)}}">
		@csrf
		@method('PATCH')
		<label>
			Nombre:
		</label>
		<input type="text" name="nombre" value="{{$curso->nombre}}">
		<br><br>

		<label>
			Área:
		</label>
		<input type="text" name="area" value="{{$curso->area}}">
		<br><br>
		<button>Actualizar</button>

	</form>
@endsection