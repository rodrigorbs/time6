@extends('template.base')

@section('titulo')
	Inclusão de Grade
@stop

@section('pagina')
	Formulario de Inclusão - Bloco
@stop

@section('conteudo')
@if(Session::has('msg'))
      {!!Session::get('msg')!!}
@endif

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
{{Form::open(['action' => ['DisciplinaController@formularioInclusao', $disciplinas->id],'method' => 'put'])}}
{{Form::label('bloco', 'Blocos')}}
<select class="browser-default" name="selecaoBlocos">
			 @forelse ($blocos as $bloco)
						@if($grade->grade_idCampus == $bloco->campus_idCampus)
									<option value= "{{$bloco->id}}">{{$bloco->nomeBlocos}}</option>
						@endif
				@empty
									<option value="" disabled selected>Selecione</option>
				@endforelse

</select>

</br></br></br>
<a class='btn btn-default' href="{{url('disciplina')}}">Voltar</a>
{{Form::submit('Selecionar',['class'=>'btn btn-default'])}}
{{Form::close()}}
@stop()
