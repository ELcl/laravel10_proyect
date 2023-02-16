
@auth
<form action="{{route('logout')}}" method="post">
	@csrf
	<button>
		Salir
	</button>
</form>
@endauth
<nav style=" display: block;">
	<ul>
		<li><a href="{{route('curso')}}"> Listar</a></li>
		<li><a href="{{route('curso.create')}}"> Nuevo +</a></li>

	</ul>
</nav>