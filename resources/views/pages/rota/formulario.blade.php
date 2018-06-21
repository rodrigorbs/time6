@extends('template.base')

@section('titulo')
	Cadastro de Rota
@stop

@section('pagina')
	Formulario Rota
@stop

@section('conteudo')

{{Form::open(['action' => 'RotaController@formularioRota','method' => 'get'])}}
{{Form::label('Campus', 'Selecione o Campus')}}
<select class="browser-default" name="selecaoCampus">
		@forelse ($campus as $ncampus)
							<option value= "{{$ncampus->id}}">{{$ncampus->nomeCampus}}</option>
		@empty
							<option value="" disabled selected>Selecione</option>
		@endforelse
</select>
</br></br></br>

<a class='btn btn-default' href="{{url('rota')}}">Voltar</a>
{{Form::submit('Selecionar',['class'=>'btn btn-default'])}}
{{Form::close()}}

@stop()
