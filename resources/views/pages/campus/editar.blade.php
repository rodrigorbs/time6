@extends('template.base')

@section('titulo')
	Cadastro de Campus
@stop

@section('pagina')
	Formulario Campus
@stop

@section('conteudo')

{{Form::open(['action' => ['CampusController@update', $campus->id], 'method' => 'put'])}}
{{Form::label('campus', 'Nome do Campus')}}
{{Form::text('nomeCampus',$campus->nomeCampus,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('logradouro', 'Logradouro')}}
{{Form::text('logradouro',$campus->logradouro,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('cidade', 'Cidade')}}
{{Form::text('cidade',$campus->cidade,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('cep', 'Cep')}}
{{Form::text('cep',$campus->cep,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('uf', 'UF')}}
{{Form::text('uf',$campus->uf,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('telefone', 'Telefone')}}
{{Form::text('telefone',$campus->telefone,['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
<a class='btn btn-default' href="{{url('campus')}}">Voltar</a>
{{Form::submit('Atualizar',['class'=>'btn btn-default'])}}
{{Form::close()}}

@stop
