@extends('template.base')

@section('titulo')
	Cadastro de Disciplina
@stop

@section('pagina')
	Formulario Disciplina
@stop

@section('conteudo')

@if(count($errors) > 0)
	<div class="alert alert-danger">
			<ul>
					@foreach($errors->all() as $error)
							<li>{{$error}}</li>
					@endforeach
			</ul>
	</div>
@endif



{{Form::open(['action' => 'DisciplinaController@store','method' => 'post'])}}
{{Form::label('nomeDisciplina', 'Disciplina')}}
{{Form::text('nomeDisciplina','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('cargaHoraria', 'Carga Horária (horas)')}}
{{Form::text('cargaHoraria','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('dataDia', 'Dia da disciplina (Ex:"segunda-feira")')}}
{{Form::text('dataDia','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}


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
				{{Form::submit('Cadastrar',['class'=>'btn btn-default'])}}
		</div>
{{Form::close()}}

@stop
