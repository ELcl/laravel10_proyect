@extends('layouts.app')
@include('layouts.nav')

@section('titulo')

	<a href="{{route('curso.edit', $curso)}}">{{$curso['nombre']}}</a>
@endsection

@section('content')

			<p>
			{{$curso['area']}}
			</p>


	<form method="post" action="{{route('curso.destroy', $curso)}}">
		@csrf
		@method('DELETE')
		<button> Eliminar </button>

	</form>
@endsection