@extends('layouts.app')
@include('layouts.nav')

@section('titulo')
	Cursos
@endsection
@section('content')

	<ul>
		@foreach ($cursos as $curso)
		<li>
			<p><a href="{{route('curso.show', $curso)}}">{{$curso['nombre']}}</a></p>

		</li>
		@endforeach
	</ul>
@endsection