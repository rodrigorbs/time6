@extends('template.home')

@section('titulo')
	Cadastro de Rotas
@stop

@section('pagina')
	Selecione o Bloco
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


<div class="col s6 m6" align="center">

{{$campus->nomeCampus}}
</div>
</br>

{{Form::open(['action' => ['HomeController@find', $campus->id],'method' => 'post'])}}

{{Form::label('Sala', 'Local de origem')}}
<select class="browser-default" name="selecaoSalasOrigem">
			 @forelse ($salas as $sala)
						@if($campus->id == $sala->blocos_idCampus)
									<option value= "{{$sala->id}}">{{$sala->nomeSalas}}</option>
						@endif
				@empty
									<option value="" disabled selected>Selecione</option>
				@endforelse

</select>
</br></br></br>

{{Form::label('Sala', 'Local de destino')}}
<select class="browser-default" name="selecaoSalasDestino">
			 @forelse ($nsalas as $nsala)
						@if($campus->id == $nsala->blocos_idCampus)
									<option value= "{{$nsala->id}}">{{$nsala->nomeSalas}}</option>
						@endif
				@empty
									<option value="" disabled selected>Selecione</option>
				@endforelse

</select>
</br></br></br>
</br></br></br>

<div class="col s6 m6" align="center">
	<a class='btn btn-default' href="{{url('/')}}">Voltar</a>
	{{Form::submit('consultar',['class'=>'btn btn-default'])}}
</div>
{{Form::close()}}

@stop
