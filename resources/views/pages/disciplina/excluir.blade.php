@extends('template.base')

@section('titulo')
	Atualizar dados do Bloco
@stop

@section('pagina')
	Editar Bloco
@stop

@section('conteudo')


  {{Form::open(['action' => ['DisciplinaController@destroy', $disciplinas->id], 'method' => 'delete'])}}
	<div class="col s6 m6" align="center">
	{{Form::label('nomeDisciplina', 'Disciplina')}}
	{{$disciplinas->nomeDisciplina}}
	</div>

	<div class="col s6 m6" align="center">
		{{Form::label('cargaHoraria', 'Carga Horária')}}
	 {{$disciplinas->cargaHoraria}}
	</div>

	<div class="col s6 m6" align="center">
		{{Form::label('dataDia', 'Dia da disciplina')}}
	  {{$disciplinas->dataDia}}
	</div>

	<div class="col s6 m6" align="center">
		{{Form::label('grade', 'Grades')}}
		@foreach($grades as $grade)
		 @if($grade->id == $disciplinas->disciplina_idGrade)
									{{$grade->nomeCurso}}
			@endif
		@endforeach
	</div>

	<div class="col s6 m6" align="center">
		{{Form::label('campus', 'Campus')}}
		@foreach($campus as $ncampus)
		 @if($ncampus->id == $grade->grade_idCampus && $grade->id == $disciplinas->disciplina_idGrade)
									{{$ncampus->nomeCampus}}
			@endif
		@endforeach
	</div>
	<div class="col s6 m6" align="center">
		{{Form::label('bloco', 'Bloco	')}}
		@foreach($blocos as $bloco)
		 @if($bloco->id == $disciplinas->disciplina_salaIdBlocos)
									{{$bloco->nomeBlocos}}
			@endif
		@endforeach
	</div>

	<div class="col s6 m6" align="center">
		{{Form::label('sala', 'Sala')}}
		@foreach ($salas as $sala)
				 @if($disciplinas->disciplina_idSala == $sala->id)
							{{$sala->nomeSalas}}
					@endif
		@endforeach

	</div>
</br></br>
    <div class="col s6 m6" align="center">
		    <a class='btn btn-default' href="{{url('disciplina')}}">Voltar</a>
        <a class='btn btn-default' href="/disciplina/editar/{{$disciplinas->id}}">Editar</i></a>
           {{Form::submit('Excluir',['class'=>'btn btn-default'])}}

  </div>
	{{Form::close()}}


@stop
