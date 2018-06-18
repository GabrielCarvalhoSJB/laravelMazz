@extends('template')
@section('content')
<h1>Usuarios</h1>
<table  class="table table-hover">
	<tr>
	<th>Nome</th>
	<th>Ações</th>
	</tr>
	@foreach($usuarios as $usuario)
	<tr>
	<td>{{$usuario->name}}</td>
		<td>
				<a href="">
					<span class="material-icons">create</span>
				</a>
				<a href="">
					<span class="material-icons">clear</span>
				</a>
			</td>
			</tr>
	@endforeach
</table>
@endsection
