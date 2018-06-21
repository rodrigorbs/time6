@extends('template.base')

@section('titulo')
	Atualizar dados de Rota
@stop

@section('pagina')
	Editar Rota
@stop

@section('conteudo')

<div class="col s6 m6" align="center">
	<p><strong>Campus</strong></p>
	@foreach($campus as $ncampus)
	 @if($ncampus->id == $rota->rota_idCampus_destino)
								{{$ncampus->nomeCampus}}
		@endif
	@endforeach
</div>
</br></br>
<div class="col s6 m6" align="center">
	{{Form::open(['action' => ['RotaController@update', $rota->id], 'method' => 'put'])}}

	{{Form::label('bloco', 'Blocos')}}
				 @foreach($blocos as $bloco)
							@if($bloco->id == $rota->rota_IdBlocos_destino)
										{{$bloco->nomeBlocos}}
							@endif
					@endforeach
</br></br>
					{{Form::label('origem', 'Origem')}}
								 @foreach($salas as $sala)
											@if($sala->id == $rota->rota_idSala_origem)
														{{$sala->nomeSalas}}
											@endif
									@endforeach
</br></br>
									{{Form::label('destino', 'Destino')}}
												 @foreach($salas as $sala)
															@if($sala->id == $rota->rota_idSala_destino)
																		{{$sala->nomeSalas}}
															@endif
													@endforeach

</br></br>

{{Form::label('orientacao', 'Orientação')}}
{{Form::textarea('orientacao','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}

</div>

<div class="col s6 m6" align="center">

	<a class='btn btn-default' href="{{url('rota')}}">Voltar</a>
	{{Form::submit('Atualizar',['class'=>'btn btn-default'])}}
	{{Form::close()}}
</div>


@stop
