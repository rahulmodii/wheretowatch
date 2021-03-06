<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- Styles -->
        
    </head>
    <body>
        <header>
                <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                          <div class="navbar-header">
                            <a class="navbar-brand" href="/">Where to Watch</a>
                          </div>
                          <ul class="nav navbar-nav">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                          <li><a href="#">you are visitor number {{$visits}}</a></li>
                          </ul>
                        </div>
                      </nav>
        </header>
    @yield('content')
    </body>
    </html>