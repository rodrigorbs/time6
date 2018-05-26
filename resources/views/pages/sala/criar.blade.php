@extends('template.base')

@section('titulo')
	Cadastro de Sala
@stop

@section('pagina')
	Formulario Sala
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

{{Form::open(['action' => ['SalaController@store', $campus->id],'method' => 'post'])}}

{{Form::label('bloco', 'Blocos')}}
<select class="browser-default" name="selecaoBlocos">
			 @forelse ($blocos as $bloco)
						@if($campus->id == $bloco->campus_idCampus)
									<option value= "{{$bloco->id}}">{{$bloco->nomeBlocos}}</option>
						@endif
				@empty
									<option value="" disabled selected>Selecione</option>
				@endforelse

</select>

{{Form::label('Andar', 'Andar')}}
{{Form::text('andar','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('Sala', 'Nome da Sala')}}
{{Form::text('nomeSalas','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('capacidade', 'Capacidade de alunos')}}
{{Form::text('capacidade','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
<a class='btn btn-default' href="{{url('sala')}}">Voltar</a>
{{Form::submit('Cadastrar',['class'=>'btn btn-default'])}}
{{Form::close()}}

@stop
