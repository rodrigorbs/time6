@extends('template.base')

@section('titulo')
	Atualizar dados do Bloco
@stop

@section('pagina')
	Editar Bloco
@stop

@section('conteudo')

<div class="col s6 m6" align="center">
	<p><strong>Campus</strong></p>
	@foreach($campus as $ncampus)
	 @if($ncampus->id == $sala->blocos_idCampus)
								{{$ncampus->nomeCampus}}
		@endif
	@endforeach
</div>
</br></br>
	{{Form::open(['action' => ['SalaController@update', $sala->id], 'method' => 'put'])}}

	{{Form::label('bloco', 'Blocos')}}
	<select class="browser-default" name="selecaoBlocos">
				 @forelse ($blocos as $bloco)
							@if($bloco->campus_idCampus == $sala->blocos_idCampus)
										<option value= "{{$bloco->id}}">{{$bloco->nomeBlocos}}</option>
							@endif
					@empty
										<option value="" disabled selected>Selecione</option>
					@endforelse

	</select>

	{{Form::label('Andar', 'Andar')}}
	{{Form::text('andar',$sala->andar,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
	{{Form::label('Sala', 'Nome da Sala')}}
	{{Form::text('nomeSalas',$sala->nomeSalas,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
	{{Form::label('capacidade', 'Capacidade de alunos')}}
	{{Form::text('capacidade',$sala->capacidade,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
	<a class='btn btn-default' href="{{url('sala')}}">Voltar</a>
	{{Form::submit('Atualizar',['class'=>'btn btn-default'])}}
	{{Form::close()}}


@stop
