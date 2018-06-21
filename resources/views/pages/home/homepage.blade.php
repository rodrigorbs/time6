@extends('template.home')

@section('titulo')
	Localize Iesb
@stop

@section('pagina')
	Localize Homepage
@stop

@section('conteudo')

<div class="row">
    <h5 class="center">Bem vindo ao Localize</h5>
</div>

<div class="col s3 m3" align="center">
{{Form::open(['action' => 'HomeController@formularioHome','method' => 'get'])}}
{{Form::label('Campus', 'Selecione o Campus')}}
<select class="browser-default" name="selecaoCampus" >
		@forelse ($campus as $ncampus)
							<option value= "{{$ncampus->id}}">{{$ncampus->nomeCampus}}</option>
		@empty
							<option value="" disabled selected>Selecione</option>
		@endforelse
</select>
</div>

</br></br></br>
</br></br></br>
<div class="col s3 m3" align="center">
{{Form::submit('Selecionar Campus',['class'=>'btn btn-default'])}}
{{Form::close()}}
</div>

@stop
