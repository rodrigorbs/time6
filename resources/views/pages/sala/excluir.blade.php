@extends('template.base')

@section('titulo')
	Atualizar dados do Bloco
@stop

@section('pagina')
	Editar Bloco
@stop

@section('conteudo')


  {{Form::open(['action' => ['SalaController@destroy', $sala->id], 'method' => 'delete'])}}
  <div class="col s6 m6" align="center">
    {{Form::label('Campus', 'Nome do Campus')}}
    @foreach($campus as $ncampus)
     @if($ncampus->id == $sala->blocos_idCampus)
                  {{$ncampus->nomeCampus}}
      @endif
    @endforeach
  </div>
<div class="col s6 m6" align="center">
	{{Form::label('blocos', 'Bloco')}}

	@foreach($blocos as $bloco)
	 @if($bloco->id == $sala->blocos_idBlocos)
								{{$bloco->nomeBlocos}}
		@endif
	@endforeach
</div>

<div class="col s6 m6" align="center">
	{{Form::label('nomeSalas', 'Sala')}}
	{{$sala->nomeSalas}}

</div>

<div class="col s6 m6" align="center">
	{{Form::label('andar', 'Andar')}}
	{{$sala->andar}}
</div>

<div class="col s6 m6" align="center">
	{{Form::label('capacidade', 'Capacidade da Turma')}}
	{{$sala->capacidade}}
</div>
</br></br>
    <div class="col s6 m6" align="center">
		    <a class='btn btn-default' href="{{url('sala')}}">Voltar</a>
        <a class='btn btn-default' href="/sala/editar/{{$sala->id}}">Editar</i></a>
           {{Form::submit('Excluir',['class'=>'btn btn-default'])}}

  </div>
	{{Form::close()}}


@stop
