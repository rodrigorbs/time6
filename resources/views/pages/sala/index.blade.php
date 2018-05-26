@extends('template.base')

@section('titulo')
Cadastro de Salas
@stop

@section('pagina')
Salas
@stop

@section('conteudo')
    @forelse ($salas as $sala)

            @include('pages.sala.card.tableSala')
	      @empty

    @endforelse


    @include('pages.sala.button.button')

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
    {{$salas->links()}}
    </div>

@stop()
