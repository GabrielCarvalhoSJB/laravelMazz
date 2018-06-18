@extends('template')
@section('content')
<h1>Pacientes</h1>
<a href="{{route('paciente.create')}}">
<button type="button" class="btn btn-primary btn-add">Cadastrar</button></a>
<table  class="table table-hover">
	<tr>
	<th>Nome</th>
		<th>Telefone</th>
		<th>Data Consulta</th>
		<th>Hora Consulta</th>
		<th>Ações</th>
	</tr>
	@foreach($pacientes as $paciente)
	<tr>
	<td>{{$paciente->name}}</td>
		<td>{{$paciente->telefone}}</td>
			<td>{{$paciente->dt_consulta}}</td>
			<td>{{$paciente->horas}}</td>
			<td>
				<a href="" class="edit">
					<span class="material-icons">create</span>
				</a>
				<a href="" class="delete">
					<span class="material-icons">clear</span>
				</a>
			</td>
			</tr>
	@endforeach
</table>
@endsection