@extends('layouts.app')

@section('content')

	<ul>
		@foreach ($cursos as $curso)
		<li>
			<p><a href="{{route('curso.show', $curso)}}">{{$curso['nombre']}}</a></p>

		</li>
		@endforeach
	</ul>
@endsection