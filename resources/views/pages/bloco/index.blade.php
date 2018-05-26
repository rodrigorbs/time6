@extends('template.base')

@section('titulo')
Cadastro de Blocos
@stop

@section('pagina')
Bloco
@stop

@section('conteudo')

@forelse ($blocos as $bloco)

		@include('pages.bloco.card.tableCampus')
	@empty

@endforelse


	@include('pages.bloco.button.button')

@if(Session::has('mensagem'))
				{!!Session::get('mensagem')!!}
@endif

@if(Session::has('msg'))
				{!!Session::get('msg')!!}
@endif
@if(Session::has('delMsg'))
				{!!Session::get('delMsg')!!}
@endif
<div class="" align="center">
{{$blocos->links()}}
</div>

@stop()
