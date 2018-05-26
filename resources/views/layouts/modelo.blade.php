<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
  </head>
  <body>
    @if ($errors->any())
    <ul class="alert alert-warning">
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      @endif
        <h3>@yield('subtitulo')</h3>
    @yield('conteudo')
  </body>
</html>
