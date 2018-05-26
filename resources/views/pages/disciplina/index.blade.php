@extends('template.base')

@section('titulo')
Cadastro de disciplinas
@stop

@section('pagina')
Disciplinas
@stop

@section('conteudo')

@forelse ($disciplinas as $disciplina)
      @include('pages.disciplina.card.tableDisciplina')
    @empty

@endforelse

@include('pages.disciplina.button.button')

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
{{$disciplinas->links()}}
</div>

@stop()
