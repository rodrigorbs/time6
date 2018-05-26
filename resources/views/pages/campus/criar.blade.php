@extends('template.base')

@section('titulo')
	Cadastro de Campus
@stop

@section('pagina')
	Formulario Campus
@stop

@section('conteudo')

@if(count($errors) > 0)
	<div class="alert alert-danger">
			<ul>
					@foreach($errors->all() as $error)
							<li>{{$error}}</li>
					@endforeach
			</ul>
	</div>
@endif


{{Form::open(['action' => 'CampusController@store','method' => 'post'])}}

{{Form::label('campus', 'Nome do Campus')}}
{{Form::text('nomeCampus','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}

{{Form::label('logradouro', 'Logradouro')}}
{{Form::text('logradouro','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}


{{Form::label('cidade', 'Cidade')}}
{{Form::text('cidade','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}


{{Form::label('cep', 'Cep')}}
{{Form::text('cep','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}


{{Form::label('uf', 'UF')}}
{{Form::text('uf','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}


{{Form::label('telefone', 'Telefone')}}
{{Form::text('telefone','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}

<a class='btn btn-default' href="{{url('campus')}}">Voltar</a>
{{Form::submit('Cadastrar',['class'=>'btn btn-default'])}}
{{Form::close()}}

@stop
