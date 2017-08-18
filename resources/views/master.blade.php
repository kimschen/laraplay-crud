<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Lists</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Hello CRUD list</h1>
        <br><br>
        <!-- yield the content from any other extension blade file where has @extend('master') & @section('content') -->
        @yield('content')
    </body>
</html>
