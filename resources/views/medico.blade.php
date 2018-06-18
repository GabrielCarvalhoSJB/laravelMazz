@extends('template')
@section('content')

<h1>Lista de Médicos</h1>
<a href="{{route('medico.create')}}">
<button type="button" class="btn btn-primary btn-add">Cadastrar</button></a>

<table  class="table table-hover">
	<tr>
	<th>Nome</th>
		<th>Telefone</th>
		<th>Data Consulta</th>
		<th>Hora Consulta</th>
		<th>Ações</th>

	</tr>
	@foreach($medicos as $medico)
	<tr>
	<td>{{$medico->name}}</td>
		<td>{{$medico->telefone}}</td>
			<td>{{$medico->dt_consulta}}</td>
			<td>{{$medico->horas}}</td>
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