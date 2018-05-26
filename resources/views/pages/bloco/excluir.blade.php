@extends('template.base')

@section('titulo')
	Atualizar dados do Bloco
@stop

@section('pagina')
	Editar Bloco
@stop

@section('conteudo')


  {{Form::open(['action' => ['BlocoController@destroy', $blocos->id], 'method' => 'delete'])}}
  <div class="col s6 m6" align="center">
    {{Form::label('Campus', 'Nome do Campus')}}
    @foreach($campus as $ncampus)
     @if($ncampus->id == $blocos->campus_idCampus)
                  {{$ncampus->nomeCampus}}
      @endif
    @endforeach
  </div>
</br>
  <div class="col s6 m6" align="center">
    {{Form::label('Bloco', 'Nome do Bloco')}}
    {{$blocos->nomeBlocos}}
  </div>
</br>
  <div class="col s6 m6" align="center">
    {{Form::label('Andares', 'Quantidade de Andares')}}
    {{$blocos->qtdAndares}}
  </div>

</div>

</br></br>
    <div class="col s6 m6" align="center">
		    <a class='btn btn-default' href="{{url('bloco')}}">Voltar</a>
        <a class='btn btn-default' href="/bloco/editar/{{$blocos->id}}">Editar</i></a>
           {{Form::submit('Excluir',['class'=>'btn btn-default'])}}

  </div>
	{{Form::close()}}


@stop
