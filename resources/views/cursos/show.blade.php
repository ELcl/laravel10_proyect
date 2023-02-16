@extends('layouts.app')

@section('content')
	<ul>
		<li>
			<p><a href="{{route('curso.edit', $curso)}}">{{$curso['nombre']}}</a></p>
			<small>{{$curso['area']}}</small>
		</li>
	</ul>
	<form method="post" action="{{route('curso.destroy', $curso)}}">
		@csrf
		@method('DELETE')
		<button> Eliminar </button>

	</form>
@endsection