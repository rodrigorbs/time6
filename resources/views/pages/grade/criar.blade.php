@extends('template.base')

@section('titulo')
	Cadastro de Sala
@stop

@section('pagina')
	Formulario Sala
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





{{Form::open(['action' => 'GradeController@store','method' => 'post'])}}

{{Form::label('campus', 'Campus')}}

<select class="browser-default" name="selecao">
		@forelse ($campus as $ncampus)
							<option value= "{{$ncampus->id}}">{{$ncampus->nomeCampus}}</option>
		@empty
							<option value="" disabled selected>Selecione</option>
		@endforelse
</select>

{{Form::label('curso', 'Nome do Curso')}}
{{Form::text('nomeCurso','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('semestre', 'Quantidade de Semestres')}}
{{Form::text('SemestresCurso','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('turno', 'Turno')}}
{{Form::text('turno','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
<a class='btn btn-default' href="{{url('grade')}}">Voltar</a>
{{Form::submit('Cadastrar',['class'=>'btn btn-default'])}}
{{Form::close()}}

@stop
