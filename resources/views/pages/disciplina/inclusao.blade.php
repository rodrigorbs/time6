@extends('template.base')

@section('titulo')
	Inclusão de Grade
@stop

@section('pagina')
	Formulario de Inclusão -Sala
@stop

@section('conteudo')

<div class="col s6 m6" align="center">
{{Form::label('nomeDisciplina', 'Disciplina')}}
{{$disciplinas->nomeDisciplina}}
</div>

<div class="col s6 m6" align="center">
	{{Form::label('cargaHoraria', 'Carga Horária')}}
 {{$disciplinas->cargaHoraria}} Horas
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
	 @if($ncampus->id == $grade->grade_idCampus)
								{{$ncampus->nomeCampus}}
		@endif
	@endforeach
</div>

</br></br>
{{Form::open(['action' => ['DisciplinaController@includeUpdate', $disciplinas->id],'method' => 'put'])}}
{{Form::label('sala', 'Salas')}}
<select class="browser-default" name="selecaoSalas">
			 @forelse ($salas as $sala)
						@if($disciplinas->disciplina_salaIdBlocos == $sala->blocos_idBlocos)
									<option value= "{{$sala->id}}">{{$sala->nomeSalas}}</option>
						@endif
				@empty
									<option value="">Selecione</option>
				@endforelse

</select>
</br></br></br>
<a class='btn btn-default' href="{{url('disciplina')}}">Voltar</a>
{{Form::submit('Selecionar',['class'=>'btn btn-default'])}}
{{Form::close()}}
@stop()
