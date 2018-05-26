@extends('template.base')

@section('titulo')
	Cadastro de Bloco
@stop

@section('pagina')
	Formulario Bloco
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


{{Form::open(['action' => 'BlocoController@store','method' => 'post'])}}
{{Form::label('Campus', 'Nome do Campus')}}
<select class="browser-default" name="selecao">
@forelse ($campus as $ncampus)
							<option value= "{{$ncampus->id}}">{{$ncampus->nomeCampus}}</option>
@empty
		<option value="" disabled selected>Selecione</option>
@endforelse
</select>
{{Form::label('Bloco', 'Nome do Bloco')}}
{{Form::text('nomeBlocos','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('Andares', 'Quantidade de Andares')}}
{{Form::text('qtdAndares','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
<a class='btn btn-default' href="{{url('bloco')}}">Voltar</a>
{{Form::submit('Cadastrar',['class'=>'btn btn-default'])}}
{{Form::close()}}

@stop
