@extends('template.base')

@section('titulo')
	Exclusão de Rota
@stop

@section('pagina')
	Excluir Rota
@stop

@section('conteudo')


  {{Form::open(['action' => ['RotaController@destroy', $rota->id], 'method' => 'delete'])}}
  <div class="col s6 m6" align="center">
    {{Form::label('Campus', 'Nome do Campus')}}
		@foreach($campus as $ncampus)
		 @if($ncampus->id == $rota->rota_idCampus_destino)
									{{$ncampus->nomeCampus}}
			@endif
		@endforeach
  </div>
<div class="col s6 m6" align="center">
	{{Form::label('bloco', 'Blocos')}}
				 @foreach($blocos as $bloco)
							@if($bloco->id == $rota->rota_IdBlocos_destino)
										{{$bloco->nomeBlocos}}
							@endif
					@endforeach
</div>

<div class="col s6 m6" align="center">
	{{Form::label('origem', 'Origem')}}
				 @foreach($salas as $sala)
							@if($sala->id == $rota->rota_idSala_origem)
										{{$sala->nomeSalas}}
							@endif
					@endforeach
</div>

<div class="col s6 m6" align="center">
	{{Form::label('destino', 'Destino')}}
				 @foreach($salas as $sala)
							@if($sala->id == $rota->rota_idSala_destino)
										{{$sala->nomeSalas}}
							@endif
					@endforeach
</div>

<div class="col s6 m6" align="center">
	{{Form::label('orientacao', 'Orientação')}}
	{{$rota->orientacao}}
</div>
</br></br>
    <div class="col s6 m6" align="center">
		    <a class='btn btn-default' href="{{url('rota')}}">Voltar</a>
        <a class='btn btn-default' href="/rota/editar/{{$rota->id}}">Editar</i></a>
           {{Form::submit('Excluir',['class'=>'btn btn-default'])}}

  </div>
	{{Form::close()}}


@stop
