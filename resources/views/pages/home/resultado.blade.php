@extends('template.home')

@section('titulo')
	Localize Iesb
@stop

@section('pagina')
	Localize Homepage
@stop

@section('conteudo')


<div class="col s3 m3" align="center">
</br></br>
@if($salas->blocos_idCampus == $campus->id)
        <label>Campus:</label></br>
       {{$campus->nomeCampus}}
 @endif

</br></br>
<label>Origem:</label></br>
{{$salas->nomeSalas}}
</br></br>
<label>Destino:</label></br>
{{$nsalas->nomeSalas}}
</br></br>
@forelse($rotas as $rota)

   @if($rota->rota_idSala_origem == $salas->id && $rota->rota_idSala_destino == $nsalas->id)
                          <label>Orientação:</label></br>
                <h5><span>{{$rota->orientacao}}</span></h5>
    @endif
    @empty
      <h5>Não há rotas existentes no sistema!</h5>
  @endforelse
</div>

</br></br></br>
</br></br></br>

<div class="col s6 m6" align="center">
	<a class='btn btn-default' href="{{url('/')}}">Voltar</a>
</div>


@stop
