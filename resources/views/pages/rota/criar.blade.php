@extends('template.base')

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

{{Form::open(['action' => ['RotaController@store', $campus->id],'method' => 'post'])}}

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
			 @forelse ($salas as $sala)
						@if($campus->id == $sala->blocos_idCampus)
									<option value= "{{$sala->id}}">{{$sala->nomeSalas}}</option>
						@endif
				@empty
									<option value="" disabled selected>Selecione</option>
				@endforelse

</select>
</br></br></br>
{{Form::label('orientacao', 'Orientação')}}
{{Form::textarea('orientacao','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
<a class='btn btn-default' href="{{url('rota')}}">Voltar</a>
{{Form::submit('cadastrar',['class'=>'btn btn-default'])}}
{{Form::close()}}

@stop
