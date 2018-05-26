@extends('template.base')

@section('titulo')
    Perfil de Usuario
@stop

@section('pagina')
    Perfil de Usuario
@stop

@section('conteudo')

    <div class="container">
        <div class="col s12 m7">
            <div class="card horizontal hoverable">
                <div class="card-image">
                    <img src="{{ route('perfil.image')}}">
                </div>
                <div class="card-stacked">
                    <form enctype="multipart/form-data" action="/perfil" method="POST">
                        <div class="card-content">
                            <div class="col m12">
                                <input type="file" name="avatar">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>

                        <div class="card-action">
                            <div class="col m12">
                                <input type="submit" class="pull-right btn btn-sm btn-primary large">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
