<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <header>
            <nav>
                <div class="nav-wrapper ">
                    <a href="#!" class="brand-logo">Controle de Veículos</a>
                    <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <!--<li><a href="">Home</a></li>-->
                        @if(Auth::guest())
                            <li><a href="{{route('site.login')}}">Login</a></li>
                        @else
                            <!--<li><a href="{{route('admin.clientes')}}">Clientes</a></li>-->
                            <li><a href="#">{{Auth::user()->name}}</a></li>
                            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                        @endif
                    </ul>
                </div>
            </nav>

            <ul class="sidenav" id="mobile">
                <!--<li><a href="">Home</a></li>-->
                @if(Auth::guest())
                    <li><a href="{{route('site.login')}}">Login</a></li>
                @else
                    <!--<li><a href="{{route('admin.clientes')}}">Clientes</a></li>-->
                    <li><a href="#">{{Auth::user()->name}}</a></li>
                    <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                @endif
            </ul>
        </header>