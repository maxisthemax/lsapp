<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','LSAPP')}}</title>
    </head>
    <body>
    <h1>
        @include('inc.navbar')
        <div class='container'>
            @include('inc.message')
            @yield('content')
        </div>
    </h1>
    </body>
</html>
