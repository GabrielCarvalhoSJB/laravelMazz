@extends ('template')
@section ('content')
<h1>Formulário Cadastro Médico</h1>


<form class="form" method="post" action="{{route('medico.store')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="form-group">
	<input type="text" name="name" placeholder="Nome: " class="form-control"></div>

	<div class="form-group">
	<input type="number" name="telefone" placeholder="Telefone: " class="form-control"></div>

	<div class="form-group">
	<input type="time" name="horas" placeholder="Horário Consulta: " class="form-control"></div>

	<div class="form-group">
	<input type="date" name="dt_consulta" placeholder="Data Consulta: " class="form-control"></div>
	
	<button type="submite" class="btn btn-primary btn-add">Enviar</button>

</form>

@endsection