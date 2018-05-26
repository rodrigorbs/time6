@extends('template.base')

@section('titulo')
	Atualizar dados do Disciplina
@stop

@section('pagina')
	Editar Disciplina
@stop

@section('conteudo')

	{{Form::open(['action' => ['DisciplinaController@update', $disciplinas->id], 'method' => 'put'])}}
	{{Form::label('nomeDisciplina', 'Disciplina')}}
	{{Form::text('nomeDisciplina',$disciplinas->nomeDisciplina,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
	{{Form::label('cargaHoraria', 'Carga Horária')}}
	{{Form::text('cargaHoraria',$disciplinas->cargaHoraria,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
	{{Form::label('dataDia', 'Dia da disciplina')}}
	{{Form::text('dataDia',$disciplinas->dataDia,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}


	{{Form::label('grade', 'Grades')}}
	<select class="browser-default" name="selecaoGrades">
				 @forelse ($grades as $grade)
										<option value= "{{$grade->id}}">{{$grade->nomeCurso}}</option>
					@empty
										<option value="" disabled selected>Selecione</option>
					@endforelse

	</select>
	</br></br></br>

	    <div class="col s6 m6" align="center">
					<a class='btn btn-default' href="{{url('disciplina')}}">Voltar</a>
					{{Form::submit('Atualizar',['class'=>'btn btn-default'])}}
			</div>
	{{Form::close()}}


@stop
