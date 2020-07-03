<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel News - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/session/style.css') }}">
    </head>
    <body>    
        <main>
            <section>
                <a href="{{ route('home') }}"><h1>Laravel<span>News</span></h1></a>
                <h2>Tenha acesso as ultimas notícias</h2>
            </section>
            <section>    
                <div class="container">  
                    @yield('content')
                </div>
            </section>
        </main>
    </body>
</html>
