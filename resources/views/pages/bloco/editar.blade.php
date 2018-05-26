@extends('template.base')

@section('titulo')
	Atualizar dados do Bloco
@stop

@section('pagina')
	Editar Bloco
@stop

@section('conteudo')


	{{Form::open(['action' => ['BlocoController@update', $blocos->id], 'method' => 'put'])}}
	{{Form::label('Campus', 'Nome do Campus')}}
	<select class="browser-default" name="selecao">
			@forelse ($campus as $ncampus)
							<option value= "{{$ncampus->id}}">{{$ncampus->nomeCampus}}</option>
			@empty
							<option value="" disabled selected>Selecione</option>
			@endforelse
	</select>


	{{Form::label('Bloco', 'Nome do Bloco')}}
	{{Form::text('nomeBlocos',$blocos->nomeBlocos,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
	{{Form::label('Andares', 'Quantidade de Andares')}}
	{{Form::text('qtdAndares',$blocos->qtdAndares,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
		<a class='btn btn-default' href="{{url('bloco')}}">Voltar</a>
	{{Form::submit('Atualizar',['class'=>'btn btn-default'])}}
	{{Form::close()}}

@stop
