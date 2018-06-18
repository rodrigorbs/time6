<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br">
<title>IESB |  @yield('titulo')</title>

<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logoSimbolo.png') }}" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iesb.css') }}" media="screen,projection">

        @yield('css')

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

        @yield('js')

</head>
    <body>


        <nav>
            <div class="nav-wrapper cor-default">

              <a  href ="{{url('login')}}">
                  <span class="material-icons">&nbsp;settings</span>
              </a>

                <a href="/" class="brand-logo">
                    &nbsp;&nbsp;IESB
                </a>

                <span class="pagina-atual hide-on-med-and-down">
                    @yield('pagina')
                </span>

                <span class="pagina-atual-mobile right hide-on-large-only">
                    @yield('pagina')
                </span>

                <ul  class="right hide-on-med-and-down">
                    <li class="navbar-img">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                          {!!Html::image('images/logo2.png')!!}

                             <span class="caret"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('conteudo')
    </body>
</html>
