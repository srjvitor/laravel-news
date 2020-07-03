<?php
    $login = false;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel News - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/new/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/notice/style.css') }}">
    </head>
    <body>    
        <header>
            <nav>
                <a href="{{ route('home') }}"><h1>Laravel News</h1></a>
                <ul>         
                    @if($login == false )                       
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Registre-se</a>
                        </li>
                    @elseif($login == true )                    
                        <li>
                            <a href="#">  
                                João Vitor Santos
                            </a>
                        </li>
                        <li>
                            <a href="#">Sair</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </header>
        <main>   
            @yield('content')  
        </main>
        <footer>
        </footer>
    </body>
</html>
