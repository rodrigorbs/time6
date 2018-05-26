@extends('template.base')

@section('titulo')
Cadastro de Grades
@stop

@section('pagina')
Grade
@stop

@section('conteudo')
  @forelse ($grades as $grade)

      @include('pages.grade.card.tableGrade')
      @empty

  @endforelse

@include('pages.grade.button.button')


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
{{$grades->links()}}
</div>
@stop()
