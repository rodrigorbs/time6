@extends('template.base')

@section('titulo')
	Atualizar dados do Bloco
@stop

@section('pagina')
	Editar Bloco
@stop

@section('conteudo')


{{Form::open(['action' => ['GradeController@destroy', $grades->id], 'method' => 'delete'])}}
<div class="col s6 m6" align="center">
	{{Form::label('Campus', 'Nome do Campus')}}
	@foreach($campus as $ncampus)
	 @if($ncampus->id == $grades->grade_idCampus)
								{{$ncampus->nomeCampus}}
		@endif
	@endforeach
</div>

<div class="col s6 m6" align="center">
	{{Form::label('curso', 'Nome do Curso')}}
	{{$grades->nomeCurso}}
</div>

<div class="col s6 m6" align="center">
	{{Form::label('semestre', 'Quantidade de Semestres')}}
	{{$grades->SemestresCurso}}
</div>

<div class="col s6 m6" align="center">
	{{Form::label('turno', 'Turno')}}
	{{$grades->turno}}
</div>

</div>

</br></br>
	<div class="col s6 m6" align="center">
			<a class='btn btn-default' href="{{url('grade')}}">Voltar</a>
			<a class='btn btn-default' href="/grade/editar/{{$grades->id}}">Editar</i></a>
				 {{Form::submit('Excluir',['class'=>'btn btn-default'])}}

</div>
{{Form::close()}}


@stop
