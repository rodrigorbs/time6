@extends('template.base')

@section('titulo')
Cadastro de Rotas
@stop

@section('pagina')
Rota
@stop

@section('conteudo')
@forelse ($rotas as $rota)

        @include('pages.rota.card.tableRota')
    @empty

@endforelse


@include('pages.rota.button.button')

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
{{$rotas->links()}}
</div>
@stop()
