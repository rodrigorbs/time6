<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IESB |  @yield('titulo')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/sau-icon.png') }}" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iesb.css') }}" media="screen,projection">


    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>

<body class="login-container bg-slate-800" >
  {{Html::script('js/jquery-3.1.1.min.js')}}
  {{Html::script('js/bootstrap.imn.js')}}
<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">

            @yield('conteudo')

        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
</div>
<!-- /page container -->
</body>
</html>
