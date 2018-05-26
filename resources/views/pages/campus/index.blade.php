@extends('template.base')

@section('titulo')
	Cadastro de Campus
@stop

@section('pagina')
	Campus
@stop

@section('conteudo')
 @forelse ($campus as $ncampus)
 		@include('pages.campus.card.tableCampus')
		@empty

	@endforelse


 @include('pages.campus.button.button')

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
 {{$campus->links()}}
</div>

@stop()
