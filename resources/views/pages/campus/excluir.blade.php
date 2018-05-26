@extends('template.base')

@section('titulo')
	Atualizar dados do Bloco
@stop

@section('pagina')
	Editar Bloco
@stop

@section('conteudo')


  {{Form::open(['action' => ['CampusController@destroy', $campus->id], 'method' => 'delete'])}}
<div class="col s6 m6" align="center">
	{{Form::label('campus', 'Nome do Campus')}}
	{{$campus->nomeCampus}}
</div>
<div class="col s6 m6" align="center">
	{{Form::label('logradouro', 'Logradouro')}}
	{{$campus->logradouro}}
</div>
<div class="col s6 m6" align="center">
	{{Form::label('cidade', 'Cidade')}}
	{{$campus->cidade}}
</div>
<div class="col s6 m6" align="center">
	{{Form::label('uf', 'UF')}}
	{{$campus->uf}}
</div>
<div class="col s6 m6" align="center">
	{{Form::label('cep', 'CEP')}}
	{{$campus->cep}}
</div>
<div class="col s6 m6" align="center">
	{{Form::label('telefone', 'Telefone')}}
	{{$campus->telefone}}
</div>

</br></br>
    <div class="col s6 m6" align="center">
		    <a class='btn btn-default' href="{{url('campus')}}">Voltar</a>
        <a class='btn btn-default' href="/campus/editar/{{$campus->id}}">Editar</i></a>
           {{Form::submit('Excluir',['class'=>'btn btn-default'])}}

  </div>
	{{Form::close()}}


@stop
