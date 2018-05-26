@extends('template.base')

@section('titulo')
	Atualizar dados do Grade
@stop

@section('pagina')
	Editar Grade
@stop

@section('conteudo')

{{Form::open(['action' => ['GradeController@update', $grades->id], 'method' => 'put'])}}
{{Form::label('Campus', 'Nome do Campus')}}
<select class="browser-default" name="selecao">
		@forelse ($campus as $ncampus)
						<option value= "{{$ncampus->id}}">{{$ncampus->nomeCampus}}</option>
		@empty
						<option value="" disabled selected>Selecione</option>
		@endforelse
</select>
{{Form::label('curso', 'Nome do Curso')}}
{{Form::text('nomeCurso',$grades->nomeCurso,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('semestre', 'Quantidade de Semestres')}}
{{Form::text('SemestresCurso',$grades->SemestresCurso,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('turno', 'Turno')}}
{{Form::text('turno',$grades->turno,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
<a class='btn btn-default' href="{{url('grade')}}">Voltar</a>
{{Form::submit('Atualizar',['class'=>'btn btn-default'])}}
{{Form::close()}}


@stop
