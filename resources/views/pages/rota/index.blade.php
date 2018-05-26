@extends('template.base')

@section('titulo')
Cadastro de Rotas
@stop

@section('pagina')
Rota
@stop

@section('conteudo')

@include('pages.rota.card.tableRota')
@include('pages.rota.button.button')

@stop()
